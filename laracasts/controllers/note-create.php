<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST);
}

view("note-create.view.php", [
    'heading' => 'Create a New Note'
]);
