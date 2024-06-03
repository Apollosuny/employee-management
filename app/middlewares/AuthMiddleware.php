<?php

class AuthMiddleware extends Middlewares
{
    public function handle()
    {
        $response = new Response();

        if (Session::data('user') != null) {
            $user = Session::data('user');

            if (isset($user['user']['role'])) {
                if ($user['user']['role'] == 'employee') {
                    $response->redirect('dashboard');
                    return;
                } else {
                    $response->redirect('admin/adminpanel');
                    return;
                }
            }
        }

        $response->redirect('');
    }
}