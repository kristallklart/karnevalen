<?php
  session_start();

  if (!isset($_SESSION['user'])) {
    header('Location: /dist/index.php');
    exit;
  } else {
    include_once(__DIR__.'/../components/head.php');
  }
?>

<body>
  <header>
    <?php
      include(__DIR__.'/../components/header.php');
    ?>
    <link rel="stylesheet" href="/dist/css/editStudents.css">
  </header>
  <nav>
    <?php
      include(__DIR__.'/../components/navbar.php');
    ?>
  </nav>
  <div class="content">
    <main>
      <div class="default-card">
        <h2>Redigera studentuppgifter</h2>
        <p>
          Välj en sektion i menyn för att visa alla studenter för den sektionen.
          Eller skriv in ett namn i sökfältet och tryck på "sök" för att söka efter en specifik student.
        </p>
          <div class="form-controls">
          <select id="section" name="section">
              <option value="" selected disabled hidden>Sektion</option>
              <?php
                include(__DIR__.'/../fetchSection.php');
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='".$row['id']."'>".$row['name']."</option>";
                }
              ?>
            </select>
            <div class="search-flex">
              <input id="searchText" type="text" placeholder="Sök">
              <input id="searchStudentButton" type="submit" value="Sök">
            </div>
          </div>
        <div class="tablesquare">
          <table id="students-table">
            <thead>
              <tr>
                <th>Förnamn</th>
                <th>Efternamn</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Sektion</th>
                <th>Redigera</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
  <footer>
    <div>
      <p id="countdownTimer"></p>
      <p id="lastUpdated">test</p>
    </div>
  </footer>
</body>

<?php
  include_once(__DIR__.'/../components/scripts.php');
?>
<script src="/dist/js/editStudents.js"></script>
</html>