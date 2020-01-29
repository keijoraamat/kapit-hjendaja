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
        return view('index');
    }

    public function auth ($username, $password) {
        global $app;

        $user = $app['database']->getUserByEmail('users', $username);
       
        if (!empty($user)) {
    
            if (password_verify($password, $user->password)) {
                return$user; 
            }
        }
        return false;
    }

    public function logout () {
        session_destroy();
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registersubmit()
    {
        $username = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $password2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);
        $action = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        global $app;

        $user = $app['database']->getUserByEmail('users', $username);
        var_dump($user);

        if (isset($action ) && $action == 'Logi sisse') {
            $error = [];

            if ( empty($username)) {
                $error['username'] = 'ei ole sobiv kasutajanimi';
            }

            if ( empty($password)) {
                $error['password'] = 'salasõna puudu';
            }
            if ( empty($password2)) {
                $error['password2'] = 'salasõna uuesti puudu';
            }
            if ( $password !==  $password2) {
                $error['password_no_mach'] = 'salasõnad ei klapi';
            }
        }
        return view('registersubmit');
    }

}