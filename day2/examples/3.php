<?php

$a = "Hello";
$b = 1;
$c = 1.1;

echo '$a : ' . gettype($a) . '<br>';
echo '$b : ' . gettype($b) . '<br>';
echo '$c : ' . gettype($c) . '<br>';

echo "<h1>Operators</h1>";
echo $a === "Hello";
echo $b > 2;
echo $c == 1.1 ? "true" : "false";
