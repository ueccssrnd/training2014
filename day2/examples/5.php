<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

$stmt = $dbh->prepare("SELECT * FROM users");
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));


// echo phpinfo();
