<?php
  $dbname = 'example_database';
  $dbuser = 'vagrant';
  $dbpass = 'vagrant';
  $dbhost = '127.0.0.1';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
  mysqli_select_db($conn, $dbname) or die("Could not open the db '$dbname'");
?>