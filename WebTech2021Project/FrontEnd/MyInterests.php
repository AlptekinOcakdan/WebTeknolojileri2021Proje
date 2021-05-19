<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Sans Font CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/MyInterests.css">

  <title>Web Technologies 2021 Project</title>
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
  <div class="container">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nvbCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="#" class="navbar-brand">WEB PROJECT</a>
    <div id="nvbCollapse" class="collapse navbar-collapse" >
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">ABOUT ME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myCountry.html">MY COUNTRY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ourLegacy.html">OUR LEGACY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CV.html">CV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="MyInterests.php">MY INTERESTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="LogIn.html">LOG IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs.html">CONTACT US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HEADER SECTION -->

<header id="headerSection">
  <div class="overlay">
    <div class="container">
      <div class="row text-center">
        <div class="col my-auto">
          <h1 class="display-3"><span>MY INTERESTS</span></h1>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- CONTENTS -->
<?php

include "php/moviedbApi.php";
$movieInfo = moviedbApi::getMovieInfo(22);
$movieInfo2 = moviedbApi::getMovieInfo(205596);

?>
<section id="films">
  <div class="jumbotron">
    <div class="container mp-25">
      <div class="row mt-5">
        <div class="col-md-6">
          <h2 class="mb-5">FILMS</h2>
          <p>Movies are my favorite because movies make a person watch all those lives that he cannot live. Movies are actually a great tool to live more than one life. I take quotes from the words I see while watching the movies and I dig them in a corner of my mind. For example, "man dies not by falling into a river, but by being submerged under water." This quote is from the movie Extraction.
            My favorite genres are action, drama, fantasy, supernatural forces. <br>
          I am going to give some examples for my favorites.</p>
            <br>
            <h3><?=$movieInfo["title"]?></h3>
            <p><?=$movieInfo["overview"]?></p>
            <br>
            <h3><?=$movieInfo2["title"]?></h3>
            <p><?=$movieInfo2["overview"]?></p>
        </div>
        <div class="col-md-6">
          <img src="images/films.jpg" class="img-fluid" alt="myPicture">
        </div>
      </div>
    </div>
  </div>
</section>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>