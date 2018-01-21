<?php
  require(__DIR__.'/db.php');
  $sql = "SELECT name, id FROM section";
  $result = mysqli_query($conn, $sql);
?>