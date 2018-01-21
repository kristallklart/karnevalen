<?php
  require_once(__DIR__.'/../backendValidation.php');
  session_start();

  if (!(isset($_SESSION['user']) &&
      (isset($_GET['id']) && ctype_digit($_GET['id'])) &&
      (isset($_GET['firstname']) && isNameValid($_GET['firstname'])) &&
      (isset($_GET['lastname']) && isNameValid($_GET['lastname'])) &&
      (isset($_GET['email']) && isEmailValid($_GET['email'])) &&
      (isset($_GET['phone']) && isPhoneNbrValid($_GET['phone'])) &&
       isset($_GET['section'])))
      {
        header('Location: /dist/index.php');
        exit;
      } else {
        $id = $_GET['id'];
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $section = $_GET['section'];
      }
?>

<?php
  include_once(__DIR__.'/../components/head.php');
?>

<body>
  <header>
    <?php
      include(__DIR__.'/../components/header.php');
    ?>
  </header>
  <nav>
    <?php
      include(__DIR__.'/../components/navbar.php');
    ?>
  </nav>
  <div class="content">
    <section>
      <?php
        include(__DIR__.'/../components/slideshows.php');
      ?>
    </section>
    <main>
      <div class="default-card">
        <h2>Ändra studentuppgifter</h2>
        <p>För att ändra studentuppgifter, fyll i formuläret nedan med studentens nya uppgifter och klicka på "Spara".</p>
        <p>Om du istället vill ta bort alla uppgifter om studenten, klicka på "Ta bort"</p>
        <div class="formsquare">
          <form id="changeStudentForm" method="post">
            <select id="section" name="section">
            <?php
              include(__DIR__.'/../fetchSection.php');
              while ($row = mysqli_fetch_assoc($result)) {
                if ($section == $row['name']) {
                  echo "<option value='".$row['id']."' selected>".$row['name']."</option>";
                } else {
                  echo "<option value='".$row['id']."'>".$row['name']."</option>";
                }
              }
              echo "</select>";
              echo "
                    <input id='firstname' name='firstname' type='text' value='".$firstname."' placeholder='Förnamn'>
                    <input id='lastname' name='lastname' type='text' value='".$lastname."' placeholder='Efternamn'>
                    <input id='email' name='email' type='text' value='".$email."' placeholder='Email'>
                    <input id='phone' name='phone' type='text' value='".$phone."' placeholder='Telefon'>
                    <input id='id' name='id' type='text' value='".$id."' hidden>
                  ";
             ?>
             <input type="button" id="saveStudentButton" value="Spara">
             <input type="button" id="removeStudentButton" value="Ta bort">
          </form>
        </div>
      </div>
    </main>
    <aside>
      <?php
        include(__DIR__.'/../components/asideEvents.php');
      ?>
    </aside>
    <div class="clear-fix"></div>
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
<script src="/dist/js/changeStudentProfile.js"></script>
</html>