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
                <a href="<?= site_url('todo/' . $todo['id'] . '/edit') ?>">Edit</a>
                <form action="<?= site_url('todo/' . $todo['id']) ?>" method="post" style="display:inline">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>