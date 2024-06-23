<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'acheron'){
    header('Location: dashboard.php');
    exit;

} else {
    header('Location: login.php');
    exit;
}
?>