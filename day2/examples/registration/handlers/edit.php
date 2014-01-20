<?php

$id = filter_input(INPUT_POST, 'id');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

include('../db.php');

$sql = "UPDATE users SET username = :user, password = :pass WHERE id = :id";

$stmt = $db->prepare($sql);
$stmt->execute(array(
              ':user' => $username,
              ':pass' => md5($password),
              ':id'   => $id
  ));

header('Location: ../list.php');