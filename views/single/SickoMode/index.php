<?php
// url for Travis Scott- SickoMode
$songUrl="https://musicdemons.com/api/v1/song/2233";
$songInfo = file_get_contents($songUrl);
$songInfo=json_decode($songInfo);

$songLyricsUrl="https://musicdemons.com/api/v1/song/2233/lyrics";
$songLyrics = file_get_contents($songLyricsUrl);
// echo $songLyrics;

$youtubeUrl= $songInfo->{"youtube_id"};
// date_format($date,"Y/m/d H:i:s")
$songDate= $songInfo->{"released"};

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<!-- head & style -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/head.php'); ?>
<body>
  <!-- navbar -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/navbar.php'); ?>

  <div id="head-jumbotron">
    <h1 id="single-name">Sicko mode <br><i id="artist-name">( By Travis Scott , Drake & Swae-lee )</i></h1>
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
      <div id="aside-container">
        <div id"related">
          <h1>En lien</h1>
          <div class="related-song">
            <div class="">
              <img src="https://www.tinymixtapes.com/sites/default/files/imagecache/Article_Width/arton3820_0.jpg" alt="" style="max-width:100%;">
            </div>
            <div class="related-song-description">
              <p>Related-song</p>
              <p>Related-song</p>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
    <h1>Discographie de l'artiste</h1>
    <hr>
    <div id="discography">
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
      <div class="artist-album">
        <img src="https://files.musicmp3.ru/scovers/als10211.jpg" alt="">
        <br>
        <p>Trap Muzik <br>2003</p>
      </div>
    </div>
    <!-- comments -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/comments.php'); ?>

  </div>
























  <!-- footer -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/footer.php'); ?>

</body>
</html>
