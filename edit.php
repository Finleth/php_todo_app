<?php 

require_once('todocreds.php');


if (isset($_GET['id'])) {
    $todo_id = $_GET['id'];
} else {
    header('Location: ./404_page.php');
    exit;
}


$name = $_GET['name'];
$description = $_GET['description'];
$date = $_GET['due_date'];

var_dump($todo_id, $name, $description, $date);

$sql = "CALL update_todo($todo_id, '$name', '$description', '$date')";

$result = mysqli_query($connection, $sql);

if ($result) {
    header("Location: ./todo.php?id=$todo_id");
} else {
    header("Location: ./edit_form.php?id=$todo_id");
    exit;
}

?>