<?php
session_start();

require_once "config.php";

if (empty($_POST['name']) || empty($_POST['password'])) {
    header('Location: login.php');
    exit();
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * from tb_login where name = '{$name}' and password = '{$password}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['name'] = $name;
    header('Location: page.php');
}else {
    header('Location: index.php');
    exit();
}