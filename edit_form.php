<?php

require_once('todocreds.php');

$todo_id = $_GET['id'];

$sql = "SELECT t.name, t.due_date, td.description FROM todos AS t JOIN todo_details AS td ON t.id = td.todo_id WHERE t.id = $todo_id";

$result = mysqli_query($connection, $sql);

$todo = mysqli_fetch_assoc($result);

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="assets/edit.css">
    </head>
    <body>
        <a href="./todo.php?id=<?= $todo_id ?>" class="return"><i class="fas fa-arrow-left"></i> Back</a>
        <form class="main-container" action="edit.php" method="GET">
            <input type="text" name="name" value="<?= $todo['name'] ?>">
            <textarea type="text" name="description"><?= $todo['description'] ?></textarea>
            <input type="date" name="due_date" value="<?= $todo['due_date'] ?>">
            <input type="hidden" name="id" value="<?= $todo_id ?>">
            <button type="submit">Confirm</button>
        </form>
    </body>
</html>