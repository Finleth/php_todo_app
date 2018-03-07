<?php

require_once('todocreds.php');

$sql = "SELECT * FROM todos";

if (isset($_GET['sort'])){
    switch ($_GET['sort']){
        case 'due_date':
            $sql .= ' ORDER BY due_date';
            break;
    }
}

$result = mysqli_query($connection, $sql);

?>
<div class="list-container">
    <h2>To Do List</h2>
    <form action="./">
        <label for="sort">Sort To Do's By</label>
        <select name="sort" id="sort">
            <option value="due_date">Due Date</option>
            <option value="created_date">Created Date</option>
        </select>
        <button>Go</button>
    </form>
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
                } else {
                    ?>
                        <div>
                            No Todos
                        </div>
                    <?php
                }
            }
        ?>
    </ul>
</div>