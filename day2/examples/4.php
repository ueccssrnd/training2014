<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Handling User Input</title>
</head>
<body>
  <h1>Login</h1>
  <p>
    <?php
      $submitted = filter_input(INPUT_POST, 'submit');
      if(isset($submitted)) {
        $user = filter_input(INPUT_POST, 'username');
        $pwd = filter_input(INPUT_POST, 'password');
        echo "result >> username : $user && password : $pwd";
      }
    ?>
  </p>
  <form action="" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="submit" value="submit">Login</button>
  </form>
</body>
</html>