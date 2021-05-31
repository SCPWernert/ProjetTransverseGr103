<?php

require_once 'Database.php';

$db = new Database();

$email = htmlspecialchars($_GET['user']);
echo $email;

$db->getHistoric($email);