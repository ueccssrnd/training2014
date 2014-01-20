<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

$user = 'spixy';
$pass = 'testing';
$sql = "INSERT INTO users (username,password) VALUES (:user,:pass)";
$stmt = $dbh->prepare($sql);
$stmt->execute(array(':user'=>$user,
                  ':pass'=>md5($pass)));
 

