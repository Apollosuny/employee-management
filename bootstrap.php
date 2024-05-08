<?php
define('_DIR_ROOT', __DIR__);

// Handle http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
}

$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));

$web_root = $web_root.$folder;

define('_WEB_ROOT', $web_root);
define('_IMG_ROOT_URL', $web_root.'/public/assets/images');

$configs_dir = scandir('app/configs');
if (!empty($configs_dir)) {
    foreach ($configs_dir as $item) {
        if ($item != '.' && $item != '..' && file_exists('app/configs/'.$item)) {
            require_once 'app/configs/'.$item;
        }
    }
}

require_once 'app/helper/LoadFunc.helper.php';

require_once 'app/core/Middlewares.php';

require_once 'app/core/Route.php';
require_once 'app/core/Session.php';


if (!empty($config['database'])) {
    $db_config = array_filter($config['database']);
    if (!empty($db_config)) {
        require_once 'app/core/Connection.php';
        require_once 'app/core/QueryBuilder.php';
        require_once 'app/core/Database.php';
        require_once 'app/core/DB.php';
    }
}

require_once 'app/App.php';

require_once 'app/core/Model.php';
require_once 'app/core/Controller.php';
require_once 'app/core/Request.php';
require_once 'app/core/Response.php';