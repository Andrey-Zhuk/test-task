<?php
session_start();
if ($_SESSION['user']) {
    header('location: profile.php');
}
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
    
    <!-- форма авторизации -->
    
    <div class="container mt-5 auto">
        <form>
            <div class="form-group">
                <label for="exampleInputLogin">Логин</label>
                <input type="text" name="login" class="form-control" id="exampleInputLogin" aria-describedby="emailHelp" placeholder="Введите логин">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
            </div>
            <button type="submit" class="btn btn-primary btn-block login-btn">Войти</button>
            <p class="mt-2">
                У вас нет аккаутна? <a href="/register.php">Зарегистрируйтесь</a>
            </p>
            <div class="msg alert alert-success text-center d-none" role="alert">Test</div>
        </form>
    </div>   
       
    
    <script src="assets/js/jquery-3.5.1.min.js"></script>     
    <script src="assets/js/main.js"></script>     
</body>
</html>