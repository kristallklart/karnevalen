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
        <h1>Frequently Asked Questions</h1>
        <p>Här nedan kan du läsa svaren på de vanligaste frågorna som besökare brukar ställa till oss.
          Du kan också ställa en egen fråga längst ner om det skulle behövas när du känner att allt di vill veta inte riktigt är besvarat. </p>

        <h3>1. När går Karnevalen av stapeln?</h3>
        <p>18-20 Maj 2018.</p>

        <h3>2. Hur många brukar besöka Karnevalen varje år?</h3>
        <p>50 000 personer.</p>

        <h3>3. När började man med Lundakarnevalen?</h3>
        <p>1849.</p>

        <h3>4. Hur ofta förekommer Lundakarnevalen?</h3>
        <p>Vart fjärde år.</p>

        <h3>5. Vilket tema hadeLundakarnevalen 2014?</h3>
        <p>Futuralkarneval.</p>
      </div>
      <div class="default-card">
      <h2>Ställ en fråga till Karnevalen!</h2>
        <div class="formsquare">
          <form action="/dist/php/sendEmailQuestion.php" id="submitQuestion" method="post">
            <input type="email" id="email" name="email" placeholder="Din mejladress *">
            <input type="text" id="subject" name="subject" placeholder="Ämne för frågan *">
            <textarea id="question" name="question" placeholder="Skriv din fråga här. *"></textarea>
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

<script src="/dist/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
<script src="/dist/js/validateQuestion.js"></script>

</html>