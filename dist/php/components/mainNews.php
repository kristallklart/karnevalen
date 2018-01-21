<?php
  require(__DIR__."/../db.php");

  $sql = "SELECT * FROM mainNews ORDER BY timestamp DESC;";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "
      <div class='card-container'>
    ";
    while ($row = mysqli_fetch_assoc($result)) {
      $heading = htmlspecialchars($row['heading']);
      $body = htmlspecialchars($row['body']);
      $imgPath = htmlspecialchars($row['imgPath']);
      echo "
      <div class='news-card'>
        <div class=photo>
          <img src='/dist/php/".$imgPath."'>
        </div>
        <div class=description>
          <h2>".$heading."</h2>
          <p>".$body."</p>
        </div>
      </div>";
    }
    echo "
      </div>
    ";
  } else {
    echo "No results";
  }
  mysqli_close($conn);
?>