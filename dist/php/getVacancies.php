<?php
  require(__DIR__.'/db.php');
  $data = json_decode(file_get_contents('php://input'), true); //Sends the string to json_decode. The object is saved in the data variable. Takes the body of the request and transforms it into a string.
  $stmt = mysqli_prepare($conn, "select vacancies from section where id = ? limit 1"); //Prepared statement. ? for parameter
  mysqli_stmt_bind_param($stmt, "s", $data['param']); //"s" means that the first parameter is a string.
  mysqli_stmt_execute($stmt); //Executes the prepared statement.
  mysqli_stmt_bind_result($stmt, $vacancies); //Binds the result you get to a new variable.
  mysqli_stmt_fetch($stmt); //Fetches the result of the statement.
  mysqli_stmt_close($stmt); //Close statement.
  mysqli_close($conn); //Close connection.

  echo json_encode(array("vacancies" => $vacancies)); //Takes an array and sets the vacancies id element to its value. Also transforms it to a string.
?>