<?php // Личные контакты пользователя
session_start();
if (!$_SESSION['user']) {
    header('location: index.php');
}
require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Авторизация и Регистрация</title>
</head>
<body>
    <!-- профиль -->
        <div class="container mt-5 auto">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title pricing-card-title">Личный кабинет</h2>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?= $_SESSION['user']['full_name'] ?></li>
                        <li><?= $_SESSION['user']['login'] ?></li>
                        <li><?= $_SESSION['user']['email'] ?></li>
                    </ul>
                    <a href="vendor/logout.php" class="btn btn-primary btn-block">Выход</a>
                    <a href="profile.php" class="btn btn-primary btn-block">Вернутся к общему списку</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">full_name</th>
                    <th scope="col">login</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <?php
                $user_id = $_SESSION['user']['id'];
                $users = mysqli_query($connect, "SELECT users.* FROM `users` INNER JOIN `contact_user` ON users.id = contact_user.contact_id WHERE contact_user.user_id = '$user_id'"); 
                
                $users = mysqli_fetch_all($users);
                foreach ($users as $user) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $user[0] ?></th>
                                <td><?= $user[1] ?></td>
                                <td><?= $user[2] ?></td>
                                <td><?= $user[3] ?></td>
                            </tr>
                        </tbody>
                    <?php
                }
            ?>
            
        </table>

    </div>  
    <script src="assets/js/jquery-3.5.1.min.js"></script>     
    <script src="assets/js/main.js"></script>     
</body>
</html>