<?php

require_once('todocreds.php');

$todo_id = $_GET['id'];

$sql = "SELECT t.name, t.due_date, td.description FROM todos AS t JOIN todo_details AS td ON t.id = td.todo_id WHERE t.id = $todo_id";

$result = mysqli_query($connection, $sql);

$todo = mysqli_fetch_assoc($result);

?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="assets/todo.css">
    </head>
    <body>
        <div class="main-container">
            <h1><?= $todo['name'] ?></h1>
            <p><?= $todo['description'] ?></p>
            <a href="./">Back</a>
            <a href="./delete.php?id=<?= $todo_id ?>">Delete</a>
        </div>
    </body>
</html>