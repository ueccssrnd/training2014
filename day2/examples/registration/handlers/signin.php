<?php
include('../db.php');
$user = filter_input(INPUT_POST, 'username');
$pass = filter_input(INPUT_POST, 'password');
$stmt = $db->prepare("SELECT id FROM users WHERE username = :user AND password = :pwd");
$stmt->execute(array(':user' => $user, ':pwd' => md5($pass)));
$result = $stmt->rowCount();

//echo $result; //0 | 1

if($result == 1) {
  session_start();
  $_SESSION['user'] = $user;
  $_SESSION['loggedIn'] = true;
  header('Location: ../members.php');
} else {
  header('Location: ../login.php');
}
