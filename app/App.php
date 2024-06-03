<?php

class App {
    private $__controller, $__action, $__params, $__routes, $__db;

    static public $app;

    function __construct()
    {
        global $routes, $config;

        self::$app = $this;

        $this->__routes = new Route();

        if (!empty($routes['default_controller'])) 
        {
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'signin';
        $this->__params = [];

        if (class_exists('DB')) {
            $dbOject = new DB();
            $this->__db = $dbOject->db;
        }

        $this->handleUrl();
    }

    function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) 
        {
            $url = $_SERVER['PATH_INFO'];
        }
        else 
        {
            $url = '/';
        }
        return $url;
    }

    public function handleUrl() 
    {
        $url = $this->getUrl();
        $url = $this->__routes->handleRoute($url);

        // Middleware
        $this->handleGlobalMiddleware($this->__db);
        $this->handleRouteMiddleware($this->__routes->getUri(), $this->__db);

        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        $urlCheck = '';

        if (!empty($urlArr[0])) {
            $this->__controller =  ucfirst($urlArr[0]) . 'Controller';
        } else {
            $this->__controller = ucfirst($this->__controller) . 'Controller';
        }

        // Handle when $urlCheck empty
        if (empty($urlCheck)) {
            $urlCheck = $this->__controller;
        }

        if (file_exists('app/controllers/'.($this->__controller).'.php'))
            {
                require_once 'controllers/'.($this->__controller).'.php';

                if (class_exists($this->__controller)) {
                    $this->__controller = new $this->__controller();
                    unset($urlArr[0]);
                    if (!empty($this->__db)) {
                        $this->__controller->db = $this->__db;
                    }
                } else {
                    $this->loadError();
                }
            }    
        else 
            $this->loadError();


        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        $this->__params = array_values($urlArr);

        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loadError();
        }
    }

    public function loadError($name='404', $data=[])
    {
        extract($data);
        require_once 'views/error/'.$name.'.php';
    }

    public function handleRouteMiddleware($routeKey, $db) {
        global $config;
        $routeKey = trim($routeKey);
        
        if (!empty($config['app']['routeMiddleware'])) {
            $routeMiddlewareArr = $config['app']['routeMiddleware'];
            
            foreach ($routeMiddlewareArr as $key => $middlewareItem) {
                if ($routeKey == trim($key)) {
                    $middlewareClass = $middlewareItem['middleware'];
                    $role = isset($middlewareItem['role']) ? $middlewareItem['role'] : null;
    
                    if (file_exists('app/middlewares/' . $middlewareClass . '.php')) {
                        require_once 'app/middlewares/' . $middlewareClass . '.php';
    
                        if (class_exists($middlewareClass)) {
                            $middlewareObject = new $middlewareClass();
                            
                            if (!empty($db)) {
                                $middlewareObject->db = $db;
                            }
    
                            if (!empty($role)) {
                                $middlewareObject->role = $role;
                            }

                            $middlewareObject->handle();
                        }
                    }
                }
            }
        }
    }

    public function handleGlobalMiddleware($db) {
        global $config;
        if (!empty($config['app']['globalMiddleware'])) {
            $globalMiddlewareArr = $config['app']['globalMiddleware'];
            foreach ($globalMiddlewareArr as $middlewareItem) {
                if (file_exists('app/middlewares/' . $middlewareItem . '.php')) {
                    require_once 'app/middlewares/' . $middlewareItem . '.php';
                    if (class_exists($middlewareItem)) {
                        $middlewareObject = new $middlewareItem();
                        if (!empty($db)) {
                            $middlewareObject->db = $db;
                        }
                        $middlewareObject->handle();
                    }
                }
            }
        }
    }
}