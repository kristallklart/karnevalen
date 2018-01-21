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
  </header>
  <nav>
    <?php
      include(__DIR__.'/../components/navbar.php');
    ?>
  </nav>
  <div class="content">
    <section>
      <?php
        include_once(__DIR__.'/../components/slideshows.php');
      ?>
    </section>
    <main>
      <div class="default-card">
        <h2>Inställningar</h2>
        <p>Fyll i formuläret nedan för att ändra användarnamn eller lösenord</p>
        <div class="formsquare">
          <form id="submitProfile" method="post">
            <input type="text" id="username" name="username" placeholder="Användarnamn"
              <?php
                echo "value='".$_SESSION['user']."'";
              ?>
            >
            <input type="password" id="newPassword" name="newPassword" placeholder="Nytt lösenord">
            <input type="password" id="password" name="password" placeholder="Nuvarande lösenord">
            <br>
            <input type="submit" value="Ändra profil">
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
<script src="/dist/js/submitProfile.js"></script>
<script src="/dist/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
<script src="/dist/js/validateAdminProfile.js"></script>

</html>