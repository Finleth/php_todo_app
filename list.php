<?php

require_once('todocreds.php');

$sql = "SELECT id, name, due_date FROM todos";

$result = mysqli_query($connection, $sql);

?>
<div class="list-container">
    <h2>To Do List</h2>
    <ul class="list">
        <?php
            if ($result){
                if ( mysqli_num_rows($result) > 0 ){
                    while ( $row = mysqli_fetch_assoc($result) ){
                        $id = $row['id'];
                        $days_till_due = floor((strtotime($row['due_date']) - time())/60/60/24) + 2;
                        ?><li class="todo">
                            <a href="todo.php?id=<?= $id ?>">
                                <h3><?= $row['name'] ?></h3>
                                <p>Due In: <?= $days_till_due; echo($days_till_due == 1 ? ' day' : ' days'); ?></p>
                            </a>
                        </li><?php
                    }
                }
            }
        ?>
    </ul>
</div>