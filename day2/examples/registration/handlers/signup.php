<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'password2');

if(!empty($username) && !empty($password) && !empty($password2)) {
  // echo "Complete";
  if ($password == $password2) {
    include('../db.php');
    $sql = "INSERT INTO users(username, password) VALUES(:user, :pass)";
    $stmt = $db->prepare($sql);
    $result =  $stmt->execute(array(
                         ':user' => $username,
                         ':pass' => md5($password)
                         )
                       );
    if ($result == 1) {
      echo "You have successfully registered!";
    } else {
      echo "Registration failed.";
    }

  } else {
    echo "Passwords do match";
  }
  
} else {
  echo "Complete all fields";
}