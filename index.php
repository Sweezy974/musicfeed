<!DOCTYPE html>
<html lang="fr" dir="ltr">
<!-- head & style -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/head.php'); ?>
<body>
  <!-- navbar -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/navbar.php'); ?>

  <!-- top 3 singles -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/page/home/single-top3.php'); ?>

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
