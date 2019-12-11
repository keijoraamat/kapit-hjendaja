<?php


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->get('admin', 'controllers/admin.php');
$router->get('feedback', 'controllers/feedback.php');

$router->post('ingredientname', 'controllers/admin.php');
$router->post('add-feedback', 'controllers/add-feedback.php');