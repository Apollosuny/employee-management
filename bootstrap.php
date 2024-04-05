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

require_once 'app/configs/routes.php';
require_once 'app/core/Route.php';
require_once 'app/App.php';
require_once 'app/core/Controller.php';