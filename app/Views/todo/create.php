<!DOCTYPE html>
<html>

<head>
    <title>Add Task</title>
</head>

<body>
    <h1>Add Task</h1>
    <form action="<?= site_url('todo/create') ?>" method="post">
        <label>Task:</label><br>
        <input type="text" name="task" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <button type="submit">Save</button>
    </form>

    <br>
    <a href="<?= site_url('todo') ?>">← Back to List</a>
</body>

</html>