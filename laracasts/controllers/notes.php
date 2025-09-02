<?php

$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1')->fetchAll();

view("notes.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes,
]);

