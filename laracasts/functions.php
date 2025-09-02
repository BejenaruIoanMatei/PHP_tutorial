<?php 

const BASE_PATH = __DIR__ . '/../';

function dd($value) {
    die(var_dump($value));
}

function urlIs($value): bool {
    return $_SERVER['REQUEST_URI'] === $value;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require BASE_PATH . 'laracasts/views/' . $path;
}

