<?php 

const PROJECT_BASE_URI = '/php_tutorial';

$routes = [
    '/' => 'laracasts/controllers/index.php',
    '/about' => 'laracasts/controllers/about.php',
    '/contact' => 'laracasts/controllers/contact.php',
    '/notes' => 'laracasts/controllers/notes.php',
    '/note' => 'laracasts/controllers/note.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require BASE_PATH . $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    view("{$code}.view.php", [
        'heading' => 'Sorry. Page Not Found.'
    ]);
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$route = str_replace(PROJECT_BASE_URI, '', $uri);
$route = ($route === '' || $route === '/') ? '/' : rtrim($route, '/');

routeToController($route, $routes);

