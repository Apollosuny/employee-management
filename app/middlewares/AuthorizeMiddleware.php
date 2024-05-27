<?php 
class AuthorizeMiddleware extends Middlewares {
  public function handle() {
    if (Session::data('user') != null) {
      $user = Session::data('user');
      $user_role = isset($user['user']['role']) ? $user['user']['role'] : null;
      
      if ($this->role != $user_role) {
        header('HTTP/1.1 403 Forbidden');
        exit;
      }
    }
  }
}