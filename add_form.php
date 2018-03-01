<div class="form-container">
    <h2>Add To Do</h2>
    <form action="add.php" method="GET">
        <div class="field">
            To Do:
            <input type="text" name="todo" placeholder="to do title" required>
        </div>
        <div class="field">
            Due Date:   
            <input id="due_date" type="date" name="due_date" placeholder="yy-mm-dd" required>
        </div>
        <div class="field">
            Description:
            <input type="text" name="description" placeholder="description of to do item" required>
        </div>
        <button class="add-btn">ADD TO DO</button>
    </form>
</div>