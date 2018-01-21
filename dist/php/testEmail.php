<?php
  require(__DIR__.'/db.php');

  return true;
  exit;

  $registeredEmail = array('a@b.com', 'a@c.com');

  $requestedEmail  = $_REQUEST['email'];

  var_dump($requestedEmail);
  exit;

  if(in_array($requestedEmail, $registeredEmail) ){
      echo 'false';
  }
  else{
      echo 'true';
  }
?>