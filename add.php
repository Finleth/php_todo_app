<?php 

require_once('todocreds.php');

$todo = $_GET['todo'];
$due_date = $_GET['due_date'];
$description = $_GET['description'];

$sql = "CALL add_todo('$todo', '$due_date', '$description')";

$result = mysqli_query($connection, $sql);

if ($result){
    if ( mysqli_affected_rows($connection) === 1 ){
        header("Location: ./");
    }
}

exit;

?>