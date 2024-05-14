<?php

class RequireLoginMiddleware extends Middlewares {
    public function handle()
    {   
        $response = new Response();
        $currentRoute = $_SERVER['REQUEST_URI'];

        if (Session::data('user') != null) {
            $user = Session::data('user');
            if ($user['role'] == 'employee') {
                if ($currentRoute !== '/dashboard') {
                    $response->redirect('dashboard');
                    return;
                }
            } else if ($user['role'] == 'admin') {
                if ($currentRoute !== '/admin/adminpanel') {
                    $response->redirect('admin/adminpanel');
                    return;
                }
            }
        } 
    }
}
