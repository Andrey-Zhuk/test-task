<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'test-1');
    if (!$connect) {
        die('Error connect to DataBase');
    }