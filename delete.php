<?php 

require_once('todocreds.php');

$todo_id = $_GET['id'];

$sql = "CALL delete_todo($todo_id)";

$result = mysqli_query($connection, $sql);

if ($result){
    header('Location: ./');
} else {
    header("Location: ./todo.php?id=$todo_id");
}

exit;

?>