<?php
  session_start();

  if  (!empty($_POST['username']) && !empty($_POST['newPassword']) && !empty($_POST['password'])) {
    include(__DIR__.'/db.php');
    $currentUser = $_SESSION['user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newPassword = $_POST['newPassword'];

    $stmt = mysqli_prepare($conn, "SELECT id, username, password FROM user WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $currentUser);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $userId, $storedUsername, $storedPassword);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($password == $storedPassword) {

      if ($currentUser == $username) {
        $stmt = mysqli_prepare($conn, "UPDATE user SET password=? WHERE id=?");
        mysqli_stmt_bind_param($stmt, "si", $newPassword, $userId);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) > 0) {
          echo 'Uppdaterade lösenordet.';
        }
      } else {
        $stmt = mysqli_prepare($conn, "UPDATE user SET password=?, username=? WHERE id=?");
        mysqli_stmt_bind_param($stmt, "ssi", $newPassword, $username, $userId);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
          $_SESSION['user'] = $username;
          echo 'Uppdaterade användarnamnet och lösenordet.';
        }
      }
      mysqli_stmt_close($stmt);
    } else {
      echo 'Lösenorder du angav stämmer inte.';
    }
    mysqli_close($conn);
  } else {
    echo 'Alla fälten måste vara ifyllda.';
  }
?>