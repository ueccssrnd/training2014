<?php
  session_start();
  if($_SESSION['loggedIn']) {
    echo "<h1>Hello " . $_SESSION['user'] . "</h1>";
    echo "<a href='logout.php'>Logout</a>";
  } else {
    header('Location: login.php');
  }

