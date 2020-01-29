<?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('contact', 'PagesController@contact');
    $router->get('countries', 'CountriesController@index');
    $router->post('addcountry', 'CountriesController@add');
    $router->get('deletecountry', 'CountriesController@delete');
    $router->get('modify', 'CountriesController@edit');
    $router->get('login', 'UsersController@index');
    $router->post('login', 'UsersController@login');
    $router->get('logout', 'UsersController@logout');
    $router->get('register', 'UsersController@register');