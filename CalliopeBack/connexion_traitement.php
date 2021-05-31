<?php
session_start();
require_once 'Database.php';


if(!empty($_POST['user_email']) && !empty($_POST['user_password'])){
    $db = new Database();

    $email = htmlspecialchars($_POST['user_email']);
    $password = htmlspecialchars($_POST['user_password']);

    $db->connectUser($email, $password);
    die();
}

  
?>