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
        <h1>Artister</h1>
        <p> Här nedan hittar du alla artister som kommer att spela och uppträda under karnevalsdagarna!</p>

        <h3>Metallica</h3>
        <p>Legenderna kommer till vår lilla Karneval! Det här får ingen missa!</p>
        <iframe src="https://www.youtube.com/embed/ujwiWjJLwBg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        <h3>Arch Enemy</h3>
        <p>Tung melodisk dödsmetall när den är som bäst.</p>
        <iframe src="https://www.youtube.com/embed/InRMwptcgAo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        <h3>Bo Kaspers Orkester</h3>
        <p>Ett trevligt och beskedligt mysband är det vi har att göra med här.</p>
        <iframe src="https://www.youtube.com/embed/6S6kgawJe1E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        <h3>Sven Ingvars</h3>
        <p>Med hits som "Små mörka ögon" och tolkningar av Gustav Frödings verk så levererar Sven Ingvars alltid!</p>
        <iframe src="https://www.youtube.com/embed/yjUZL1vJWwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        <h3>Lena Philipsson</h3>
        <p>The one and only Lena PH! Need we say more?</p>
        <iframe src="https://www.youtube.com/embed/273doGZGYiA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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