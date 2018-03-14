<?php
  header("content-type:application/json");
  $jsondata = file_get_contents("user.json");
  echo $jsondata;
?>
