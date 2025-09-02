<?php

$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);

$id = $_GET['id'];

$note = $db->query('select * from notes where id = :id', [
    'id' => $id
])->fetch();

view("note.view.php", [
    'heading' => 'Note',
    'note' => $note,
]);

