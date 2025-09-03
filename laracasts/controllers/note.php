<?php

$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort();
}

$currentUserId = 1;

if ($note['user_id'] != $currentUserId) {
    abort(code: Response::FORBIDDEN);
}

view("note.view.php", [
    'heading' => 'Note',
    'note' => $note,
]);

