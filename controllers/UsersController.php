<?php

class UsersController { 
    public function index () 
    {
        return view( 'login');
    }

    public function login()
    {
        $username = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $action = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);

        if (isset($action ) && $action == 'Logi sisse') {
            $error = [];

            if ( empty($username)) {
                $error['username'] = 'ei ole sobiv kasutajanimi';
            }

            if ( empty($password)) {
                $error['password'] = 'salasõna puudu';
            }
            
            if ( empty($error)) {
                $this -> auth($username, $password);
            }
        }

        print_r($_SESSION);
        print_r($_REQUEST);
    }

    public function auth ($username, $password) {
        global $app;

        $user = $app['database']->getUserByEmail('users', $username);

        print_r($user);
    }

}