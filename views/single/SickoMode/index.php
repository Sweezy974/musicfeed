<!DOCTYPE html>
<html lang="fr" dir="ltr">
<!-- head & style -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/head.php'); ?>
<body>
  <!-- navbar -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/navbar.php'); ?>

  <div class="container">
    <h1 id="album-name">T.I. vs T.I.P</h1>
    <hr>
    <div id="album-head">
      <div  id="album-cover">
        <img  src="https://www.tinymixtapes.com/sites/default/files/imagecache/Article_Width/arton3820_0.jpg ">
      </div>
      <div id="album-description">
        <div class="description-name"><p>Titre de l'album : </p><p style="font-weight:bold;margin-left:1%;">T.I. vs T.I.P</p></div>
        <div class="description-name"><p>Artiste : </p><p style="font-weight:bold;margin-left:1%;">T.I.</p></div>
        <div class="description-name"><p>Genre : </p><p style="font-weight:bold;margin-left:1%;">Hip-Hop</p></div>
        <div class="description-name"><p>Date de sortie : </p><p style="font-weight:bold;margin-left:1%;">17/05/2009</p></div>
      </div>
      <br>

    </div>
    <div id="album-honor">
      <h3><i class="material-icons">star</i> n° 1</h3>
      <h3><i class="material-icons ">attach_money</i> 1 500 000 unités vendus</h3>
      <a href="#"><h3><i class="material-icons ">whatshot</i> 3 nominations *</h3></a>
    </div>
    <div class="tracklist-container">

    </div>
    <h1>Discographie de l'artiste</h1>
    <hr>
    <div id="discography">

    </div>
    <!-- comments -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/comments.php'); ?>

  </div>
























  <!-- footer -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/footer.php'); ?>
</body>
</html>
