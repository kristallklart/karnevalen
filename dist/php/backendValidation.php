<?php
require(__DIR__.'/db.php');

function isNameValid($name){
  if(!empty($name)){
    if(preg_match("/^[a-öA-Ö]{1,20}$/",$name)){
      return true;
    }else{
      return false;
    }
  }
  return false;
}

function isEmailValid($email){
  if(!empty($email)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }else{
      return false;
    }
  }
  return false;
}

function isPhoneNbrValid($phonenbr){
  if(preg_match("/^[0-9]{0,10}$/", $phonenbr)){
    return true;
  }else{
    return false;
  }
  return false;
}

function isSectionValid($section){
  if(!empty($section)){
    global $conn;
    $sections = array();
    $sql = "select id from section";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
      array_push($sections, $row['id']);
    }

    if(in_array($section, $sections)){
      return true;
    }else{
      return false;
    }
  }
  return false;
}
?>