<?php 

require_once('todocreds.php');

$todo_id = $_GET['id'];
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
}

?>