<?php
  require(__DIR__.'/backendValidation.php');
  require(__DIR__.'/db.php');

  if ((isset($_POST["id"]) && ctype_digit($_POST["id"])) &&
      (isNameValid($_POST["firstname"])) &&
      (isNameValid($_POST["lastname"])) &&
      (isEmailValid($_POST["email"])) &&
      (isSectionValid($_POST["section"])) &&
      (isPhoneNbrValid($_POST["phone"])))
  {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $section = $_POST['section'];
    $phone = $_POST['phone'];

    $stmt = mysqli_prepare($conn, "UPDATE student SET firstname=?, lastname=?, email=?, section=?, phone=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $section, $phone, $id);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
      echo 'Studentuppgifter sparade.';
    } else {
      echo 'Misslyckades med att spara studentuppgifter.';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  } else {
    echo 'Uppgifterna du angav kunde inte valideras.';
  }