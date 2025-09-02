<?php 

require __DIR__ . '/laracasts/functions.php';
require "Database.php";

$db = new Database();
$posts = $db->query()->fetchAll(PDO::FETCH_ASSOC);

// require 'router.php';

dd($posts);