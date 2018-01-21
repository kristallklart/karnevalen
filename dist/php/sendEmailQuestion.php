<?php
require_once(__DIR__.'/db.php');
require_once(__DIR__.'/backendValidation.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = "";
  $recipient = "hammerslay@gmail.com";

  if(isEmailValid($_POST["email"])){
    $to = $recipient;
    $subject = $_POST["subject"];
    $txt = $_POST["question"];
    $headers = "From: " . $_POST["email"];

    if(mail($to,$subject,$txt,$headers)){
      header('Location: /dist/php/views/emailQuestionSuccessful.php');
    }
    else{
      header('Location: /views/emailQuestionFailed.php');
    }
  }
}
?>