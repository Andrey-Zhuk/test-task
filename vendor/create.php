<?php 
session_start();
require_once 'connect.php';

$user_id = $_SESSION['user']['id'];
$contact_id = $_GET['id'];


mysqli_query($connect, "INSERT INTO `contact_user` (`id`, `user_id`, `contact_id`) VALUES (NULL, $user_id, $contact_id)");

header('location: ../contact.php');

