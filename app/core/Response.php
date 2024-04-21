<?php 

class Response {
    public function redirect($uri = '') {
        if (preg_match('~^(http|https)~is', $uri)) {
            $url = $uri;
        }
        $url = _WEB_ROOT.'/'.$uri;
        header("Location: ".$url);
        exit;
    }
}