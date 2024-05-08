<?php

class AuthMiddleware extends Middlewares {
    public function handle()
    {
        // $data = $this->db->table('User')->get();
        if (Session::data('admin_login') == null) {

        }
    }
}