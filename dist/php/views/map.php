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
        <h1>Hitta till Karnevalen!</h1>
        <p>Använd kartan nedan för att hitta till Karnevalen.</p>
        <p>Vi befinner oss på adress: Sandgatan 2, 223 50 Lund, Sweden.</p>
        <p>Är det så att du vill du åka kollektivt så kolla in närmsta buss och busshållplats på kartan.</p>
        <p>Välkommen!</p>
        <div id="map"></div>
      </div>
      <div class="default-card">
        <p style="font-size: 12px;">Portions of this page are modifications based on work created and <a href="https://developers.google.com/readme/policies/" target="_blank">shared by Google</a> and used according to terms described in the <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons 3.0 Attribution License.</a></p>
      </div>
    </main>
    <aside>
      <?php
        include_once(__DIR__.'/../components/scripts.php');
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
<script src="/dist/js/map.js"></script>

</html>