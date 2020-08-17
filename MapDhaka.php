<?php
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bangladesh Orphanage Aid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css "href="css/glyphicons.css">
  <link rel="stylesheet" type="text/css "href="css/custom.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
  <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
</head>
<body style="margin-top:5px;">
<?php
include('MenuBar.php')
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a style="text-decoration:none;"href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a style="text-decoration:none;"href="Dhaka.php">Dhaka&nbsp;<a></li>
    <li class="breadcrumb-item active" aria-current="page">/ Dhaka Orphanage Maps</li>
  </ol>
</nav>
<br>
<br>
<div class="container">
  <h2 style="color:#0B3954"><b>Dhaka</b></h2>
  <br>
  <?php
  $sql=mysqli_query($con,"select * from orphanage_details where id='1'");
  while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
<span class="d-block p-2 bg-dark text-white">
    <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
    <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
    <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
    <br>
       <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
  function initMap() {
  // The location of dhaka
  var dhaka = {lat: 24.045958, lng: 90.032722};
  // The map, centered at dhaka
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: dhaka});
  // The marker, positioned at dhaka
  var marker = new google.maps.Marker({position: dhaka, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5XGtiX8Ho1HW_1D6245XESF0A3eDA80I&callback=initMap">
    </script>
  </span>
<?php } ?>
  
  <br>


  <?php
  $sql=mysqli_query($con,"select * from orphanage_details where id='2'");
  while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
  <span class="d-block p-2 bg-dark text-white">
    <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
    <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
    <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.7656748891886!2d90.36723731536364!3d23.82693019176455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13142f1c5a9%3A0x79e9f959a0deb6c3!2sJamia%20Imdadia%20Darul%20Uloom%20And%20Orphanage!5e0!3m2!1sen!2smy!4v1593518599217!5m2!1sen!2smy" 
    width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
  </span>
    <?php }?>
  
    <br>


<?php
$sql=mysqli_query($con,"select * from orphanage_details where id='3'");
while($r_res=mysqli_fetch_assoc($sql))
{
?>
<span class="d-block p-2 bg-dark text-white">
  <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
  <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
  <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
  <br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.878134476312!2d90.38241051536446!3d23.893939689193697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c46556916e39%3A0x35f198be2174db79!2sFamilies%20for%20Children%20Uttara%20Dhaka%20Bangladesh!5e0!3m2!1sen!2smy!4v1593593145889!5m2!1sen!2smy" 
  width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
</span>
  <?php }?>

    
  <br>


  <?php
  $sql=mysqli_query($con,"select * from orphanage_details where id='4'");
  while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
  <span class="d-block p-2 bg-dark text-white">
    <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
    <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
    <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14609.525468515416!2d90.37748613646063!3d23.733776146534524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8dbd138e3af%3A0xb74b7a3d4521d350!2sChhotomoni%20Nibash!5e0!3m2!1sen!2smy!4v1593593385920!5m2!1sen!2smy"
    width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
  </span>
    <?php }?>

      
  <br>


<?php
$sql=mysqli_query($con,"select * from orphanage_details where id='5'");
while($r_res=mysqli_fetch_assoc($sql))
{
?>
<span class="d-block p-2 bg-dark text-white">
  <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
  <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
  <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
  <br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d469090.2175663517!2d89.67777684823!3d23.28790270341226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0afdb64f15f%3A0x28d1c8713107406d!2sSOS%20Children&#39;s%20Village!5e0!3m2!1sen!2smy!4v1593593533881!5m2!1sen!2smy"
  width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
</span>
  <?php }?>

  </div>
  <?php
  include('Footer.php')
  ?>
  </body>
  </html>