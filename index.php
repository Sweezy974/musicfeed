<!DOCTYPE html>
<html lang="fr" dir="ltr">
<!-- head & style -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/head.php'); ?>
<body>
  <!-- navbar -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/navbar.php'); ?>

  <div class="jumbotron">
    <div class="bg-image">
      <h1>Top des charts</h1>
    </div>
    <!-- <h1 class="title">Top des charts</h1> -->
    <div class="charts">
      <a href="/musicfeed/views/artist/Travis-Scott/single/SickoMode/" id="top1">
        <div class="caption">
          <p>1. TraviS Scott - Sicko mode</p>
        </div>
      </a>
      <a href="/musicfeed/views/artist/Ariana-Grande/single/ThankUNext/" id="top2">
        <div class="caption">
          <p>2. Ariana Grande - Thank u, next</p>
        </div>
      </a>

      <a href="/musicfeed/views/artist/XXXTENTACION/single/BAD/"  id="top3">
        <div class="caption">
          <p>3. XXXTENTACION - BAD!</p>
        </div>
      </a>
    </div>
  </div>

  <div class="container">
    <!-- single charts -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/page/home/single-charts.php'); ?>

  </div>
  <!-- album charts -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/page/home/album-charts.php'); ?>
  <!-- footer -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/footer.php'); ?>
</body>
</html>
