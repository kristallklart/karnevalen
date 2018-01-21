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
        <h3>Ansök till en sektion!</h3>
        <p>Här nedan kan du ansöka för att bli en del av de olika sektionerna inom Lundakarnevalen.</p>
        <p>Välj en sektion för att se om det finns några vakanser. Isåfall är det bara att fylla i formuläret.</p>
        <p>Välkommen!</p>

        <div class="formsquare">
          <form action="/dist/php/sectionApplication.php" id="submitApplication" method="post">
            <input type="text" id="firstname" name="firstname" placeholder="Förnamn *">
            <input type="text" id="lastname" name="lastname" placeholder="Efternamn *">
            <input type="email" id="email" name="email" placeholder="Mejladress *">
            <input type="text" id="phonenbr" name="phonenbr" placeholder="Telefonnummer">
            <select id="section" name="section">
              <option value="" selected disabled hidden>Välj en sektion *</option>
              <?php
                include(__DIR__.'/../fetchSection.php');
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='".$row['id']."'>".$row['name']."</option>";
                }
              ?>
            </select>
            <p id="test">Vakanser:</p>
            <p id="vacancies">Välj en sektion</p>
            <input type="submit" value="Ansök">
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

<script src="/dist/js/getVacancies.js"></script>
<script src="/dist/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
<script src="/dist/js/validation.js"></script>

</html>