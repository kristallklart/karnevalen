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
        <h3>Maila en sektion</h3>
        <p>Fyll i formuläret nedan och klicka på "Skicka" för att skicka mail till hela sektionen.</p>
        <div class="formsquare">
          <form action="/dist/php/sendMail.php" method="post" id="contentForm">
            <select id="section" name="section">
            <?php
              include(__DIR__.'/../fetchSection.php');
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id']."'>".$row['name']."</option>";
              }
            ?>
            </select>
            <input type="text" name="heading" id="heading" placeholder="Rubrik">
            <textarea id="message" name="message" rows="15" maxlength="1500" placeholder="Meddelande"></textarea>
            <input type="submit" value="Skicka">
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
</html>