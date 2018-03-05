<?php 

require_once('todocreds.php');

if (empty($_GET['id']) || !isset($_GET['name']) || !isset($_GET['description']) || !isset($_GET['date'])) {
    ?><div>
        Something went wrong
    </div><?php
    exit;
}

$todo_id = $_GET['id'];
$name = $_GET['name'];
$description = $_GET['description'];
$date = $_GET['date'];

?>
<html>
<head>
    <link rel="stylesheet" href="./assets/confirm_delete.css">
</head>
<body>
    <div class="main-container">
        <h1 class="title">Are you sure you want to delete the todo:</h1>
        <h3><?= $name ?></h3>
        <p><?= $description ?></p>
        <p>Due Date: <?= $date ?></p>
        <div class="button-container">
            <a href="delete.php?id=<?= $todo_id ?>"><button>Confirm</button></a>
            <a href="todo.php?id=<?= $todo_id ?>"><button>Cancel</button></a>
        </div>
    </div>
</body>
</html>