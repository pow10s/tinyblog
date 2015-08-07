<!doctype html>
<html>
<body>
<table>
        <tr><th>Users</th> <th>Age</th> <th>Adress</th></tr>
        <?php if (isset($users)): ?>
            <?foreach($users as $user):?>
                <tr><td><?=$user[0]['name']?></td> <td><?=$user[0]['age']?></td> <td><?=$user[0]['adress']?></td></tr>
            <?endforeach?>
        <?php endif; ?>
</table>
</body>
