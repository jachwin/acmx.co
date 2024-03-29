<?php
 // extract the filename
 $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');// $file is set to "index"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content='true' name='protect_images' />
  <meta name="image_protection_blurb" content="This photo is Copyright © 2020 ACMX.CO. All rights reserved.">
</head>
<title>acmx.co</title>
<!-- Favicon-->
<link href="assets/14.jpg" rel="shortcut icon" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Content/css/magnific-popup.css">
<link rel="stylesheet" href="Content/css/jquery-ui.css">
<link rel="stylesheet" href="Content/css/owl.carousel.min.css">
<link rel="stylesheet" href="Content/css/owl.theme.default.min.css">
<link rel="stylesheet" href="Content/css/lightgallery.min.css">    
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="Content/css/homestyle.css"> 

</head>
<style>
  .container.show-container {
    opacity: 1;
    width: 95%;
  }
  .assets-grid {
    display: flex;
    position: relative;
    align-items: center;
    height: 100vh;
    overflow-x: auto;
    overflow-y: hidden;
    margin-left: 0;
    transition: margin-left 500ms ease;
    padding-left: 15em;
    margin-top: 0px;
  }

  .asset {
    align-items: center;
    margin: 0px 15px;
    position: relative;
    flex-shrink: 0;
  }
  .asset.image {
    width: auto;
  }
  .asset.image .image-wrap {
    position: relative;
  }
  .asset.image .image-wrap-inner {
    position: relative;
    overflow: hidden;
  }
  .gallery-element {
    display: block;
    width: auto;
    height: 700px;
    transition: opacity 500ms ease-in-out;
  }
  @media(max-width:700px){
    .assets-grid {
      display: flex;
      position: relative;
      align-items: center;
      height: 60vh;
      overflow-x: auto;
      overflow-y: hidden;
      margin-left: 0;
      transition: margin-left 500ms ease;
      padding-left: 0em;
      margin-top: 0px;
    }
    .gallery-element {
      display: block;
      width: auto;
      height: 450px;
      transition: opacity 500ms ease-in-out;
    }
/*    .image{
   max-height: calc(100vh - 184px - 60px);
   }*/
 }

</style>
<body class="" >
  <?php include "header.php"?>
  <div class="container show-container" >
    <div class="assets-grid">
      <?php
     $files = glob("assets/images/$title/*.*");
      for ($i=0; $i<count($files); $i++) {
        $image = $files[$i];
        echo ' <div class="asset image">
        <div class="image-wrap">
        <div class="image-wrap-inner">
        <img class="gallery-element lazyautosizes lazyloaded" data-sizes="auto" width="1600" height="1600" src="'.$image .'" alt="" />'."
        </div>
        </div>
        </div>
        ";
      }
      ?>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>

  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

</body>
</html>