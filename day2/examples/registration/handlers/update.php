<?php

$id = filter_input(INPUT_GET, 'id');

include('../db.php');

$sql = "SELECT username FROM users WHERE id = :id";
$stmt= $db->prepare($sql);
$stmt->execute(array(':id' => $id));

$infos = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($infos);
?>
<form action="edit.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <input type="text" value="<?php echo $infos[0]['username']?>" name="username">
  <input type="password" placeholder="new password" name="password"><br>
  <button type="submit">Update</button>
</form>