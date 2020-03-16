<?php
  include("core/control/control.php");
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NNW</title>

  <link href="core/design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="core/design/nnw.css" rel="stylesheet">

</head>

<body>

<div class="container">
<div class="row">

  <div class="nav-bar text-center">
    <div class="col-md-12">
      <div class="nav-bar-header text-right">
        <a class="nav-bar-header-lang" href="?country=us&lang=us">US</a>
        <a class="nav-bar-header-lang" href="?country=de&lang=de">DE</a>
      </div>
    </div>

    <div class="col-md-12">
      <img width="150" height="150" src="core/design/img/lwn-transparent.png">
      <hr>
      <?php
        load_lang_categorys($lang);
      ?>
    </div>
  </div>

  <?php
    load_news_general($title, $urlToImage, $url, $news);
  ?>

  <footer>
    <br>
      <a class="nav-bar-header-menu" href="index.php">home</a>
      <a class="nav-bar-header-menu" href="news.php?category=business">business</a>
      <a class="nav-bar-header-menu" href="news.php?category=entertainment">entertainment</a>
      <a class="nav-bar-header-menu" href="news.php?category=general">general</a>
      <a class="nav-bar-header-menu" href="news.php?category=health">health</a>
      <a class="nav-bar-header-menu" href="news.php?category=science">science</a>
      <a class="nav-bar-header-menu" href="news.php?category=sports">sports</a>
      <a class="nav-bar-header-menu" href="news.php?category=technology">technology</a>
    <hr>
    <p class="footer-copyright">Copyright 2020 @ LWN </p>
    <a target="_blank" href="http://www.davidespier.com" class="created-by" >Created and design by davidespier.com</a>
  </footer>
  </div>
</div>



  <script src="core/design/vendor/jquery/jquery.slim.min.js"></script>
  <script src="core/design/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
