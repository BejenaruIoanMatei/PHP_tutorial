<?php 

require "functions.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/php_tutorial/laracasts/') {
    require '../laracasts/controllers/index.php';
} else if ($uri === '/php_tutorial/laracasts/about.php'){
    require '../laracasts/controllers/about.php';
}

