<?php

class AuthMiddleware extends Middlewares {
    public function handle()
    {
        if (Session::data('user') != null) {
            $user = Session::data('user')['user'];
            if ($user['role'] == 'employee') {
                $respone = new Response();
                $respone->redirect('');
                
            } else if ($user['role'] == 'admin') {
                $respone = new Response();
                $respone->redirect('admin/users');
            }
        }
    }
}