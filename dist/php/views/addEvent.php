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
        <h3>Lägg till ett nytt event</h3>
        <p>Fyll i formuläret nedan för att lägga till ett nytt event</p>
        <div class="formsquare">
          <form action="/dist/php/addEventContent.php" method="post" enctype="multipart/form-data" id="contentForm">
            <textarea id="body" name="body" rows="15" maxlength="1500" placeholder="Brödtext"></textarea>
            <input type="file" id="image" name="image">
            <br>
            <input type="submit" value="Lägg till">
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
<script src="/dist/js/addEvent.js"></script>
<script src="/dist/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
<script src="/dist/js/validateEvent.js"></script>
</html>