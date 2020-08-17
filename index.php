<?php
session_start();
error_reporting(1);
include('connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css "href="css/glyphicons.css">
    <link rel="stylesheet" type="text/css "href="css/custom.css">
    <title>Bangladesh Orphanage Aid</title>
  </head>
  <body>
    <?php
    include('MenuBar.php')
?>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slider/oz3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>We Beleive</h1>
          <h3><p>All Children Should Thrive</p></h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slider/oy2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>We Beleive</h1>
          <h3><p>All Children Should Stay Happy</p></h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slider/ox1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>We Beleive</h1>
          <h3><p>All Children Should Have a Place</p></h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<div class="container">
  <h1 style="text-align:Center;">Welcome To <font color="#fa6432"><b>Bangladesh Orphanage Aid</b></font></h1><hr><br>
</div>
<center>
<div style="background-color:#f0f0f0; width:1430px;">
  <br>
  <br>
<div class="container-fluid">
<div class="row mb-2">
   <div class="col-md-6">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-success">Capital</strong>
         <h3 class="mb-0">Dhaka</h3><br>
         <p class="card-text mb-auto">Dhaka is the capital and largest city of Bangladesh. It is one of the largest and most densely populated cities in the world, it has many old and new orphanages</p>
<br>
         <a href="Dhaka.php" class="btn btn-info">See More</a>
       </div>
       <div class="col-auto d-none d-lg-block">
         <img src="images/divisions/dhaka.jpg" alt="..." width="370" height="315" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
       </div>
     </div>
   </div>
   <div class="col-md-6">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-primary">Division</strong>
         <h3 class="mb-0">Chittagong</h3><br>
         <p class="mb-auto">Chittagong is a major coastal city and financial centre in southeastern Bangladesh. The city has a population of more than 2.5 million, it has many old and new orphanages</p><br>
         <a href="Ctg.php" class="btn btn-info">See More</a>
       </div>
       <div class="col-auto d-none d-lg-block">
         <img src="images/divisions/ctg.jpg" alt="..." width="370" height="315" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
       </div>
     </div>
   </div>
 </div>

 <br>
 <br>

 <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Division</strong>
          <h3 class="mb-0">Rajshahi</h3><br>
          <p class="card-text mb-auto">Rajshahi is a metropolitan city, and a major urban, commercial and educational centre of Bangladesh. It has quite a number of orphanages</p><br>
          <a href="Rajshahi.php" class="btn btn-info">See More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="images/divisions/raj.jpg" alt="..." width="370" height="315" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Division</strong>
          <h3 class="mb-0">Barishal</h3><br>
          <p class="mb-auto">Barishal is a major city that lies on the bank of Kirtankhola river in south-central Bangladesh. There is a lot of govt. and non govt. orphanages</p> <br>
          <a href="Barishal.php" class="btn btn-info">See More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="images/divisions/bari.jpg" alt="..." width="370" height="315" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
        </div>
      </div>
    </div>
  </div>

   <br>
   <br>

  <div class="row mb-2">
     <div class="col-md-6">
       <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
         <div class="col p-4 d-flex flex-column position-static">
           <strong class="d-inline-block mb-2 text-primary">Division</strong>
           <h3 class="mb-0">Khulna</h3><br>
           <p class="card-text mb-auto">It is the administrative seat of Khulna District and Khulna Division. The city has a population of 663,342. In this city there are a quite a number of orphanages.</p><br>
           <a href="Khulna.php" class="btn btn-info">See More</a>
         </div>
         <div class="col-auto d-none d-lg-block">
           <img src="images/divisions/khulna.jpg" alt="..." width="370" height="315" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
         </div>
       </div>
     </div>
     <div class="col-md-6">
       <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
         <div class="col p-4 d-flex flex-column position-static">
           <strong class="d-inline-block mb-2 text-primary">Division</strong>
           <h3 class="mb-0">Sylhet</h3><br>
           <p class="mb-auto">It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal. There are a few orphanages here.</p><br>
           <a href="Sylhet.php" class="btn btn-infobtn btn-info">See More</a>
         </div>
         <div class="col-auto d-none d-lg-block">
           <img src="images/divisions/sylhet.jpg" alt="..." width="370" height="315" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
         </div>
       </div>
     </div>
   </div>
   <br>
   <br>
</div>
</div></center>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="red" style="  position: relative;
  width: 50%;">
<center>  <img src="images/donates/bannar.png" alt="..." width="1430" height="555"></center>
<a href="donate.php" class="btn btn-danger"
style="
  position: absolute;
  top: 47%;
  left: 128%;
  color: white;
  font-size: 25px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;">Donate!</a>
</div>
       <?php
    include('Footer.php')
    ?>
  </body>
</html>
