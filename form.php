<?php
  $name = $_GET['name'];
  echo $name;
  $foodlink = file_get_contents($name);
  echo $foodlink;
?>
