<?php

  $name = $_GET["name"];
$statement = $link->prepare('INSERT INTO test_table (id, name)
    VALUES (?, ?)');

$statement->execute([1, $name]);
  echo "Test".$name;

?>
