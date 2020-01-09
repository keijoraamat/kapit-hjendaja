<?php

class UsersController { 
    public function index () 
    {
        return view( 'login');
    }

    public function login()
    {
        print_r($_SESSION);
        print_r($_REQUEST);
    }

}