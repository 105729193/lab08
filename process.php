<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Check username and password (Student ID)
if ($username == 'Tajuddin' && $password == '105729193') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>