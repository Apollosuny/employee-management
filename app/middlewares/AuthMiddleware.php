<?php

class AuthMiddleware extends Middlewares {
    public function handle()
    {
        if (Session::data('user') != null) {
            $response = new Response();

            if (Session::data('user')['user']['role'] == 'employee') {
                $response->redirect('dashboard');
                exit;
            } else {
                $response->redirect('admin/adminpanel');
                exit;
            }

            
        }
    }
}