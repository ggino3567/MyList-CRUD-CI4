<!DOCTYPE html>
<html>

<head>
    <title>Edit Task</title>
</head>

<body>
    <h1>Edit Task</h1>
    <form action="<?= site_url('todo/update/' . $todo['id']) ?>" method="post">
        <label>Task:</label><br>
        <input type="text" name="task" value="<?= esc($todo['task']) ?>" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"><?= esc($todo['description']) ?></textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="<?= site_url('todo') ?>">← Back to List</a>
</body>

</html>