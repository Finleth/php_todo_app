<?php

require_once('todocreds.php');

if (empty($_GET['id'])) {
    ?><div>
        Something went wrong
    </div><?php
    exit;
}

$todo_id = $_GET['id'];

$sql = "SELECT t.name, t.due_date, td.description FROM todos AS t JOIN todo_details AS td ON t.id = td.todo_id WHERE t.id = $todo_id";

$result = mysqli_query($connection, $sql);

$todo = mysqli_fetch_assoc($result);

if (empty($todo)){
    ?><div>
        Something went wrong
    </div><?php
    exit;
}

$name =  $todo['name'];
$description = $todo['description'];
$date = $todo['due_date'];

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="assets/todo.css">
    </head>
    <body>
        <a href="./" class="return"><i class="fas fa-arrow-left"></i> Back</a>
        <div class="main-container">
            <h1><?= $todo['name'] ?></h1>
            <p><?= $todo['description'] ?></p>
            <p>Due on the date: <?= $todo['due_date'] ?></p>
            <a href="./edit_form.php?id=<?= $todo_id ?>"><button>Edit</button></a>
            <a href="./confirm_delete.php?<?php print("id=$todo_id&name=$name&description=$description&date=$date") ?>"><button>Delete</button></a>
        </div>
    </body>
</html>