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
        <h1>Nöjen</h1>
        <p> Här nedan hittar du alla trevliga nöjen som kommer att gå av stapeln under karnevalsdagarna!</p>
        <h3>Barnevalen</h3>
        <p>Temp.</p>
        <h3>Cirkusen</h3>
        <p>Temp.</p>
        <h3>Filmen</h3>
        <p><Temp./p>
        <h3>Revyn</h3>
        <p>Temp.</p>
        <h3>Showen</h3>
        <p>Temp.</p>
        <h3>Spexet</h3>
        <p>Temp.</p>
        <h3>Smånöjena</h3>
        <p>Temp.</p>
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

</html>