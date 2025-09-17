<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
</head>

<body>
    <h1>Todo List</h1>
    <a href="<?= site_url('todo/new') ?>">+ Add Task</a>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <b><?= esc($todo['task']) ?></b> - <?= esc($todo['description']) ?>
                <!-- Edit -->
                <a href="<?= site_url('todo/edit/' . $todo['id']) ?>">Edit</a>

                <!-- Delete -->
                <a href="<?= site_url('todo/delete/' . $todo['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>