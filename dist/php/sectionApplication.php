<?php
  require_once(__DIR__.'/db.php');
  require_once(__DIR__.'/backendValidation.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName="";
    $lastName="";
    $email="";
    $section="";
    $phoneNbr="";

    if((isNameValid($_POST["firstname"])) && (isNameValid($_POST["lastname"])) && (isEmailValid($_POST["email"])) && (isSectionValid($_POST["section"])) && (isPhoneNbrValid($_POST["phonenbr"]))){

      $firstName = $_POST["firstname"];
      $lastName = $_POST["lastname"];
      $email = $_POST["email"];
      $section= $_POST["section"];
      $phoneNbr = $_POST["phonenbr"];

      $statement = mysqli_prepare($conn, "UPDATE section SET vacancies = vacancies - 1 WHERE id = ?");
      mysqli_stmt_bind_param($statement, "s", $section);
      mysqli_stmt_execute($statement);

      $statement = mysqli_prepare($conn, "INSERT INTO student(firstname, lastname, email, phone, section) VALUES(?,?,?,?,?)");
      mysqli_stmt_bind_param($statement, "ssssi", $firstName, $lastName, $email, $phoneNbr, $section);
      mysqli_stmt_execute($statement);
      header('Location: /dist/php/views/applicationSuccessful.php');
    }
    else{
      header('Location: /dist/php/views/applicationFailed.php');
    }
  }
?>