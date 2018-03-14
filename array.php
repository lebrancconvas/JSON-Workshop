<?php
  header("content-type:application/json");
  $arr01 = array(
    "101"=>"Beauty",
    "102"=>"Jib"
  );
  //แปลง Array ของ PHP ให้เป็น JSON
  $jsondata = json_encode($arr01);
  echo $jsondata;
?>
