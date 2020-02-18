<?php

session_start();

$_SESSION['id'] = $_POST['id'];
$_SESSION['pass'] = $_POST['pass'];

header('Location: ../info.php');
