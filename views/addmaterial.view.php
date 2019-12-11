<?php

$app['database']->insert('ingredient', [ 
    'name' =>$_POST['ingredientname'],
    'unit'=>'nanogramm'
    ]);



    header('Location: /admin');