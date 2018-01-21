<?php
  session_start();
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
        include_once(__DIR__.'/../components/slideshows.php');
      ?>
    </section>
    <main>
      <div class="default-card">
        <h2>Logga in</h2>
        <p>Ange dina inloggningsuppgifter nedan för att logga in.</p>
        <div class="formsquare">
          <form action="/dist/php/login.php" id="loginForm" method="post">
            <input type="text" id="username" name="username" placeholder="Användarnamn">
            <input type="password" id="password" name="password" placeholder="Lösenord">
            <br>
            <input type="submit" value="Logga in">
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

<script src="/dist/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
<script src="/dist/js/validateAdminLogin.js"></script>

</html>