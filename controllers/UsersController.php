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
                $user = $this -> auth($username, $password);

                if ($user) {
                    if (($user->role)==='administrator') {
                        $_SESSION["is_admin"]=true;
                        $_SESSION["username"]=$user->username;
                    }
                    $_SESSION["is_user"]=true;
                    $_SESSION["username"]=$user->username;
                    echo $user->role;
                } else {
                    echo 'username or password wrong';
                    session_destroy();
                }
            } else {
                session_destroy();
            }
        }

        print_r($_SESSION);
        print_r($_REQUEST);
        print_r($error);
        return view('index');
    }

    public function auth ($username, $password) {
        global $app;

        $user = $app['database']->getUserByEmail('users', $username);
        if (!empty($user)) {
            //TODO password verify
            if ($user->password === $password) {
                return$user; 
            }
        }
        return false;
    }

}