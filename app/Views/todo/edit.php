<h1>Edit Task</h1>
<form method="post" action="<?= site_url('todo/' . $todo['id']) ?>">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="task" value="<?= esc($todo['task']) ?>"><br>
    <textarea name="description"><?= esc($todo['description']) ?></textarea><br>
    <button type="submit">Update</button>
</form>