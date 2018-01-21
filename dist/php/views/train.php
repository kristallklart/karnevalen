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
        <h1>Tåget!</h1>
        <h3>Datum</h3>
          <p>Tåget kör sin runda varje dag under 18-20 Maj 2018.</p>
        <h3>Tid</h3>
          <p>Tåget går klockan 12:00 under alla karnevalsdagar.</p>
        <h3>Antal vagnar</h3>
          <p>Vi har 32 stycken vagnar i tåget.</p>
        <h3>Total vikt</h3>
          <p>Tåget väger totalt så mycket som 17 ton.</p>
        <h3>Längd</h3>
          <p>Hela tåget är sammanlagt ungefär 130 m långt.</p>
        <h3>Färdväg</h3>
          <p>Se färdvägen för tåget nedan.</p>
        <div id="map"></div>
      </div>
      <div class="default-card">
        <p style="font-size: 12px;">Portions of this page are modifications based on work created and <a href="https://developers.google.com/readme/policies/" target="_blank">shared by Google</a> and used according to terms described in the <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons 3.0 Attribution License.</a></p>
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
<script src="/dist/js/validation.js"></script>
<script src="/dist/js/travelRouteMap.js"></script>

</html>