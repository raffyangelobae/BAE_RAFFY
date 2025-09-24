<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Students List</title>
  <link rel="stylesheet" href="<?= base_url() . /public/css/get_all.css?> ">
  <link rel="stylesheet" href="<?= base_url() . /public/css/get_all.css?>">
</head>
<body>
<h2><?= $show_deleted ? 'Deleted Students' : 'Active Students' ?></h2>

<a href="/users/get-all" class="btn">Show Active</a>
<a href="/users/get-all?show=deleted" class="btn">Show Deleted</a>

<form method="get" action="/users/get-all">
    <?php if ($show_deleted): ?>
        <input type="hidden" name="show" value="deleted">
    <?php endif; ?>
    <input type="text" name="search" value="<?= $search ?? '' ?>" placeholder="Search...">
    <button type="submit">Search</button>
</form>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $r): ?>
        <tr>
            <td><?= $r['id'] ?></td>
            <td><?= $r['first_name'] . ' ' . $r['last_name'] ?></td>
            <td><?= $r['email'] ?></td>
            <td>
                <?php if ($show_deleted): ?>
                    <a href="/users/restore/<?= $r['id'] ?>">Restore</a> | 
                    <a href="/users/hard_delete/<?= $r['id'] ?>" onclick="return confirm('Hard delete permanently?')">Hard Delete</a>
                <?php else: ?>
                    <a href="/users/update/<?= $r['id'] ?>">Edit</a> | 
                    <a href="/users/delete/<?= $r['id'] ?>" onclick="return confirm('Soft delete this student?')">Delete</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div>
    <?= $pagination_links ?>
</div>

</body>
</html>
                    
