<?php

if (!empty($_POST['body']) && isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

    $uploadsDirPath = 'uploads/aside-event/';
    $verifyImg = getimagesize($_FILES['image']['tmp_name']);

    if (!in_array($verifyImg['mime'], array('image/png', 'image/jpeg'))) {
      echo 'Bilden du försökte ladda upp var inte i rätt format. Bara jpg och png är tillåtet.';
      exit;
    }

    $temp = explode(".", $_FILES["image"]["name"]);
    $newFilename = round(microtime(true)) . '.' . end($temp);
    $savePath = $uploadsDirPath . $newFilename;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $savePath)) {
      include(__DIR__.'/db.php');
      $timestamp = date_timestamp_get(new DateTime());
      $body = strip_tags($_POST['body']);
      $imgPath = strip_tags($savePath);

      $stmt = mysqli_prepare($conn, "INSERT INTO asideEvent (timestamp, body, imgPath) VALUES (?,?,?)");
      mysqli_stmt_bind_param($stmt, "iss", $timestamp, $body, $imgPath);
      mysqli_stmt_execute($stmt);

      if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo 'Eventet sparat.';
      } else {
        echo 'Misslyckades med att spara eventet.';
      }

      mysqli_stmt_close($stmt);
      mysqli_close($conn);
    } else {
      echo "Misslyckades med att spara eventet. Detta kan bero på att du inte har åtkomst till uppladdningsmappen.";
    }

  } else {
    die('Alla obligatoriska värden skickades inte med.');
  }
?>