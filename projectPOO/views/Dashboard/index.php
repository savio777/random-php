<?php
include '../../controller/Users/Dasboard.php';

$Dashboard = new DashboardController();

$users = $Dashboard->getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />
    <title>Document</title>
</head>

<body>
    <?php //var_dump($users); 
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo ($user['id']) ?></td>
                <td><?php echo ($user['nome']) ?></td>
                <td><?php echo ($user['email']) ?></td>
                <td><a href="seila/editar?id=<?php echo ($user['id']) ?>">
                        <span class="material-icons-outlined">
                            edit
                        </span>
                    </a></td>
                <td><a href="seila/excluir?id=<?php echo ($user['id']) ?>">
                        <span class="material-icons-outlined">
                            delete
                        </span>
                    </a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>