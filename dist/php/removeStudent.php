<?php
   require(__DIR__.'/backendValidation.php');
   require(__DIR__.'/db.php');

  if (isset($_POST["id"]) && ctype_digit($_POST["id"])) {
    $id = $_POST["id"];
    $stmt = mysqli_prepare($conn, "DELETE FROM student WHERE id=?");
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
      echo 'Studenten borttagen.';
    } else {
      echo 'Misslyckades med att ta bort studenten.';
    }
  } else {
    echo 'Misslyckades med att validera dina uppgifter';
  }
?>