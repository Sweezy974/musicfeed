<?php
// get track infos
$songUrl="https://musicdemons.com/api/v1/song/2233";
$songLyricsUrl="https://musicdemons.com/api/v1/song/2233/lyrics";
include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/models/getSong.php');


?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<!-- head & style -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/head.php'); ?>
<body>
  <!-- navbar -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/navbar.php'); ?>

  <div id="head-jumbotron">
    <h1 id="single-name">Sicko mode <br><i id="artist-name">By Travis Scott , Drake & Swae-lee </i></h1>
    <br>
    <div  id="single-cover">
      <iframe src="https://www.youtube.com/embed/<?php echo $youtubeUrl;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id="single-description">
      <div class="description-name">
        <p><i>Produit par  Rogét Chahayed, Hit-Boy, OZ, Tay Keith & CuBeatz </i></p>
      </div>
      <div class="description-name"><p>Date de sortie : <?php echo $songDate; ?></p></div>
    </div>

  </div>

  <div class="container">
    <div class="lyrics-container">
      <div id="lyrics">
        <h1>Paroles</h1>
        <hr>
        <pre style="word-wrap: break-word;  white-space: pre-wrap;"><?php echo $songLyrics; ?></pre>
      </div>
      <!-- aside -->
      <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/page/aside.php'); ?>
    </div>
    <!-- discography -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/page/artist/discography.php'); ?>
    <!-- comments -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/comments.php'); ?>

  </div>
























  <!-- footer -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/footer.php'); ?>

</body>
</html>
