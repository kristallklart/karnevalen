<?php
  session_start(); //Session start to be able to destroy the already existing/resumed session.
  session_destroy(); //Destroys the current session.
  header('Location: /dist/index.php'); //Redirects to the start page.
?>