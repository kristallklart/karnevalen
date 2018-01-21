<?php
  session_start();
  include_once(__DIR__.'/php/components/head.php');
?>

<body>
  <header>
    <?php
      include(__DIR__.'/php/components/header.php');
    ?>
  </header>
  <nav>
    <?php
      include(__DIR__.'/php/components/navbar.php');
    ?>
  </nav>
  <div class="content">
    <section>
      <?php
        include(__DIR__.'/php/components/slideshows.php');
      ?>
    </section>
    <main>
      <?php
        include(__DIR__.'/php/components/mainNews.php');
      ?>
    </main>
    <aside>
        <?php
          include(__DIR__.'/php/components/asideEvents.php');
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
  include_once(__DIR__.'/php/components/scripts.php');
?>
</html>