<div class="card-container fotorama-container">
  <div class="slideshow-card">
    <div class="fotorama"
        data-nav="thumbs"
        data-allowfullscreen="native"
        data-loop="true"
        data-autoplay="3000">
        <?php
          $files = array_diff(scandir(__DIR__.'/../../images/taget/'), array('.', '..'));
          foreach ($files as $file) {
            echo "<img src='/dist/images/taget/".$file."'>";
          }
        ?>
    </div>
  </div>
  <div class="slideshow-card">
    <div class="fotorama"
        data-nav="thumbs"
        data-allowfullscreen="native"
        data-loop="true"
        data-autoplay="5000">
        <?php
          $files = array_diff(scandir(__DIR__.'/../../images/karnevalister/'), array('.', '..'));
          foreach ($files as $file) {
            echo "<img src='/dist/images/karnevalister/".$file."'>";
          }
        ?>
    </div>
  </div>
</div>