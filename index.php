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
      <a href="#" id="top1">
        <div class="caption">
          <p>1. TraviS Scott - Sicko mode</p>
        </div>
      </a>
      <a href="#"id="top2">
        <div class="caption">
          <p>2. Ariana Grande - PowerGurl</p>
        </div>
      </a>

      <a href="#" id="top3">
        <div class="caption">
          <p>3. Bruno Mars - Magic</p>
        </div>
      </a>
    </div>
  </div>

  <div class="container">
    <h1 id="title-single">Top 10 singles</h1>
    <hr>
    <!-- <div class="charts-list">
    <img src="https://via.placeholder.com/150C/O https://placeholder.com/" alt=""> -->
    <ul class="top-list">
      <li><div class="top-position"><strong> 1. </strong></div><img class="single-cover" src="https://static1.squarespace.com/static/5589cbe5e4b077187934d12e/5b63b4ad575d1f2fcbf1f890/5b63b4ad0e2e72545f051d24/1533260995456/Screen+Shot+2018-08-02+at+9.32.03+PM.png?format=100w"><a href="/musicfeed/views/single/SickoMode/"> Sicko Mode - Travis Scott</a></li>
      <li><div class="top-position"><strong> 2. </strong></div><img class="single-cover" src="http://www.chartsinfrance.net/style/covers1/7/4/myeariin_my-everything.jpg"><a href="#">Thank u - next</a></li>
      <li><div class="top-position"><strong> 3. </strong></div><img class="single-cover" src="https://static.qobuz.com/images/covers/qb/h0/g2thv46fdh0qb_100.jpg"><a href="#"> BAD! - XXXTENTACION</a></li>
      <li><div class="top-position"> 4. </div><img class="single-cover" src="https://via.placeholder.com/50C/O "><a href="#"> Lorem - Ipsum</a></li>
      <li><div class="top-position"> 5. </div><img class="single-cover" src="https://via.placeholder.com/50C/O "><a href="#"> Lorem - Ipsum</a></li>
      <li><div class="top-position"> 6. </div><img class="single-cover" src="https://via.placeholder.com/50C/O "><a href="#"> Lorem - Ipsum</a></li>
      <li><div class="top-position"> 7. </div><img class="single-cover" src="https://via.placeholder.com/50C/O "><a href="#"> Lorem - Ipsum</a></li>
      <li><div class="top-position"> 8. </div><img class="single-cover" src="https://via.placeholder.com/50C/O "><a href="#"> Lorem - Ipsum</a></li>
      <li><div class="top-position"> 9. </div><img class="single-cover" src="https://via.placeholder.com/50C/O "><a href="#"> Lorem - Ipsum</a></li>
      <li><div class="top-position"> 10. </div><img class="single-cover" src="https://via.placeholder.com/50C/O "><a href="#"> Lorem - Ipsum</a></li>

    </ul>
  </div>

  <div class="album-charts">
    <div class="container">
      <h1 id="title-album">Top 10 albums</h1>
      <hr>
      <div class="row">
        <a href="views/album/t.i. vs t.i.p/">
          <div class="col">
            <img class="album-cover" src="https://www.tinymixtapes.com/sites/default/files/imagecache/Article_Width/arton3820_0.jpg ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
        <a href="#">
          <div class="col">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
        <a href="#">
          <div class="col">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>TLorem Ipsum</p>
          </a>
        </div>
        <a href="#">
          <div class="col">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
        <div class="col">
          <a href="#">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
      </div>
      <div class="row">
        <a href="#">
          <div class="col">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
        <a href="#">
          <div class="col">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
        <a href="#">
          <div class="col">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
        <a href="#">
          <div class="col">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
        <div class="col">
          <a href="#">
            <img class="album-cover" src="https://via.placeholder.com/150C/O ">
            <br>
            <p>Lorem Ipsum</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/musicfeed/views/block/footer.php'); ?>
</body>
</html>
