<ul id="navbar">
  <li><a href="/dist/php/views/blikarnevalist.php">Bli Karnevalist</a>
    <ul class="dropdown-content">
      <li><a href="/dist/php/views/submitApplication.php">Ansök</a></li>
      <li><a href="/dist/php/views/sektioner.php">Sektioner</a>
        <ul class="dropdown-content">
          <li><a href="/dist/php/views/administerIT.php">AdministerIT</a></li>
          <li><a href="/dist/php/views/biljonsen.php">Biljonsen</a></li>
          <li><a href="/dist/php/views/bladderiet.php">Blädderiet</a></li>
          <li><a href="/dist/php/views/dansen.php">Dansen</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href="#">Om Karnevalen!</a>
    <ul class="dropdown-content">
      <li><a href="/dist/php/views/attractions.php">Nöjen</a></li>
      <li><a href="/dist/php/views/artists.php">Artister</a></li>
      <li><a href="/dist/php/views/train.php">Tåget</a></li>
      <li><a href="/dist/php/views/faq.php">FAQ</a></li>
      <li><a href="/dist/php/views/map.php">Hitta hit</a></li>
    </ul>
  </li>
  <li><a href="#">Reservera biljetter</a></li>
  <?php
    if (isset($_SESSION['user'])) {
      include(__DIR__.'/adminMenu.php');
    }
  ?>
  <div id="menu-button">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
  </div>
</ul>