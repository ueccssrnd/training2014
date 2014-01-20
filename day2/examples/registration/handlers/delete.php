<?php

$id = filter_input(INPUT_GET, 'id');

include('../db.php');

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $db->prepare($sql);

$deleted = $stmt->execute(array(':id' => $id));

header('Location: ../list.php');