<?php
  require(__DIR__.'/db.php');

  $data = json_decode(file_get_contents('php://input'), true);
  if(!empty($data['param'])) {
    $students = array();
    $stmt = mysqli_prepare($conn,
    "SELECT student.id, student.firstname, student.lastname, student.email, student.phone, section.name as 'section'
      FROM student
      INNER JOIN section ON student.section=section.id
      WHERE student.section = ?");

    mysqli_stmt_bind_param($stmt, "i", $data['param']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $firstname, $lastname, $email, $phone, $section);

    while(mysqli_stmt_fetch($stmt)) {
      $student = array();
      $student['id'] = $id;
      $student['firstname'] = $firstname;
      $student['lastname'] = $lastname;
      $student['email'] = $email;
      $student['phone'] = $phone;
      $student['section'] = $section;
      array_push($students, $student);
    }

    echo json_encode($students);
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
?>