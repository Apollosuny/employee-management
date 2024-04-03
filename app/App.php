<?php

class App {
    private $__controller, $__action, $__params;

    function __construct()
    {
        global $routes;
        if (!empty($routes['default_controller'])) 
        {
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'index';
        $this->__params = [];
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
        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }

        if (file_exists('app/controllers/'.($this->__controller).'.php'))
            {
                require_once 'controllers/'.($this->__controller).'.php';
                $this->__controller = $urlArr[0];
                unset($urlArr[0]);
            }    
        else 
            echo 'Error';

        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        $this->__params = array_values($urlArr);

        call_user_func([$this->__controller, $this->__action, $this->__params]);
    }
}