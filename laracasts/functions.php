<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

const BASE_PATH = __DIR__ . '/../';
function dd($value) {
    die(var_dump($value));
}

function urlIs($value): bool {
    return $_SERVER['REQUEST_URI'] === $value;
}

function view($path, $attributes = []) {
    extract($attributes);
    
    $fullPath = BASE_PATH . 'laracasts/views/' . $path;
    
    if (!file_exists($fullPath)) {
        echo "EROARE: This view does not exist.<br>";
        exit;
    }
    
    require $fullPath;
}