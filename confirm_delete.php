<?php 

require_once('todocreds.php');

$todo_id;

if (isset($_GET['id'])) {
    $todo_id = $_GET['id'];
} else {
    header('Location: ./404_page.php');
    exit;
}


?>