<?php
  session_start(); //Starts a session if there is none. Or resumes an already existing session (E.g when coming from another page)
  include('db.php');

  $username = $_POST['username']; //Gets username from the form post request in login.php.
  $password = $_POST['password']; //Gets the passwword from the form post request in login.php
  $stmt = mysqli_prepare($conn, "SELECT username, password FROM user WHERE username = ?");
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $storedUsername, $storedPassword); //The result from the query is saved in these variables.
  mysqli_stmt_fetch($stmt);
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  if ($password == $storedPassword) {
    $_SESSION['user']=$username; //Session is a global array. User is key, value is username. Sets a variable to the username.
    header('Location: /dist/index.php'); //Changes the header in the browser, goes to the start page.
    exit(); //Exits the script.
  } else {
    header('Location: /dist/php/views/loginFailed.php'); //If the login fails, you are redirected to the startpage but the session is not set to a
    exit();
  }
?>