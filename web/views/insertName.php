<?php

  $name = $_GET["name"];
$st = $app['pdo']-> prepare('INSERT INTO test_table (id, name)
    VALUES (?, ?)');

$st->execute([1, $name]);
  echo "Test".$name;

?>
