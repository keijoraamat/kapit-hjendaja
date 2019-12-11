<?php

$names = $app['database']->selectAll('ingredient');

require 'views/index.view.php';