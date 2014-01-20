<?php

include('db.php');

$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($results);

?>

<table>
  <tr>
    <th>id</th>
    <th>username</th>
    <th>password</th>
  </tr>
  <?php foreach ($results as $row): ?>
    <tr>
      <?php foreach ($row as $key => $value):?>
        <td><?php echo $value; ?></td>
      <?php endforeach;?>
        <td><a href="handlers/update.php?id=<?php echo $row['id']; ?>">update</a></td>
        <td><a href="handlers/delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
  <?php endforeach;?>
</table>