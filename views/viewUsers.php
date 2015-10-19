<!doctype html>
<html>
<body>
<table>
        <tr><th>Users</th> <th>Age</th> <th>Adress</th></tr>
        <?php if (isset($users)): ?>
            <?php foreach($users as $user): ?>
                <tr><td><?=$user['name']?></td> <td><?=$user['age']?></td> <td><?=$user['adress']?></td></tr>
            <?php endforeach; ?>
        <?php endif; ?>
</table>
</body>
