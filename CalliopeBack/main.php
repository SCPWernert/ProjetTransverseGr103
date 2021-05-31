<?php

require_once 'Database.php';

$db = new Database();


$name = htmlspecialchars($_POST['user_name']);
$firstname = htmlspecialchars($_POST['user_surname']);
$email = htmlspecialchars($_POST['user_email']);
$password = htmlspecialchars($_POST['user_password']);
$cost = ['cost' => 12];
$password = password_hash($password, PASSWORD_BCRYPT, $cost);


$db->addUser($name, $firstname, $email, $password);


?>