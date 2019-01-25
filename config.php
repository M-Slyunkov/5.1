<?php
  function connect()
  {
    $host = 'localhost';
    $dbname = 'mslyunkov';
    $user = 'mslyunkov';
    $password = 'neto1919';
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    return $pdo;
  }
?>