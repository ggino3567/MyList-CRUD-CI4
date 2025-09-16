<h1>New Task</h1>
<form method="post" action="<?= site_url('todo') ?>">
    <?= csrf_field() ?>
    <input type="text" name="task" placeholder="Task"><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <button type="submit">Save</button>
</form>