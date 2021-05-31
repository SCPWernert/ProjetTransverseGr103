<?php

require_once 'Database.php';

$db = new Database();


$email = htmlspecialchars($_GET['email']);
$name = htmlspecialchars($_GET['name']);

$db->addHistoric($email,$name);
die();