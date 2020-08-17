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
</head>
<body style="margin-top:5px;">
<?php
include('MenuBar.php')
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a style="text-decoration:none;"href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a style="text-decoration:none;"href="Ctg.php">Chittagong&nbsp;<a></li>
    <li class="breadcrumb-item active" aria-current="page">/ Chittagong Orphanage Maps</li>
  </ol>
</nav>
<br>
<br>
<div class="container">
  <h2 style="color:#0B3954"><b>Chittagong</b></h2>
  <br>
  <?php
  $sql=mysqli_query($con,"select * from orphanage_details where id='6'");
  while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
<span class="d-block p-2 bg-dark text-white">
    <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
    <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
    <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.6150028832429!2d91.79153514062448!3d22.33625296833169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd923af0fd43b%3A0xd66466ccbbd75582!2zSmFtaWEgRGFydWwgVWx1bSBNYWRyYXNhIGFuZCBPcnBoYW5hZ2Ug4Kac4Ka-4Kau4Ka_4Kav4Ka84Ka-IOCmpuCmvuCmsOCngeCmsiDgpongprLgp4Hgpq4g4Kau4Ka-4Kam4KeN4Kaw4Ka-4Ka44Ka-IOCmkyDgpo_gpqTgpr_gpq7gppbgpr7gpqjgpr4!5e0!3m2!1sen!2smy!4v1593594407358!5m2!1sen!2smy" 
    width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
  </span>
<?php } ?>
  
  <br>


  <?php
  $sql=mysqli_query($con,"select * from orphanage_details where id='7'");
  while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
  <span class="d-block p-2 bg-dark text-white">
    <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
    <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
    <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.7298402307747!2d91.84659191534698!3d22.40153984487233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9ef488c69f5%3A0xdc62f1f487964e28!2sFayzul%20Ulum%20nurani%20madrasa%20hefzkhana%20and%20ophanage!5e0!3m2!1sen!2smy!4v1593594876378!5m2!1sen!2smy" 
    width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
  </span>
    <?php }?>
  
    <br>


<?php
$sql=mysqli_query($con,"select * from orphanage_details where id='8'");
while($r_res=mysqli_fetch_assoc($sql))
{
?>
<span class="d-block p-2 bg-dark text-white">
  <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
  <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
  <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
  <br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.6412957237253!2d91.83420051534621!3d22.32940184747974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad273e4ad0fd05%3A0xc6c957895f09d50!2sUpalabdhi%20Orphanage!5e0!3m2!1sen!2smy!4v1593594950816!5m2!1sen!2smy" 
  width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
</span>
  <?php }?>

    
  <br>


  <?php
  $sql=mysqli_query($con,"select * from orphanage_details where id='9'");
  while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
  <span class="d-block p-2 bg-dark text-white">
    <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
    <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
    <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.335214817311!2d91.77861871534631!3d22.340968147062163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd93b9cbc3a13%3A0x5ce9c133d04108e0!2sSOS%20Children&#39;s%20Village%20Chittagong!5e0!3m2!1sen!2smy!4v1593595030657!5m2!1sen!2smy"
    width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
  </span>
    <?php }?>

      
  <br>


<?php
$sql=mysqli_query($con,"select * from orphanage_details where id='10'");
while($r_res=mysqli_fetch_assoc($sql))
{
?>
<span class="d-block p-2 bg-dark text-white">
  <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
  <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
  <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
  <br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.713262063912!2d91.82772691534655!3d22.364453246213838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd882302163db%3A0x6f019c7acc0ff222!2sProbortok%20Sangha!5e0!3m2!1sen!2smy!4v1593595137481!5m2!1sen!2smy"
  width="1080" height="460" frameborder="0" style="border:0; padding-left:10px;" allowfullscreen="true" aria-hidden="true" tabindex="0"></iframe>
</span>
  <?php }?>

  </div>
  <?php
  include('Footer.php')
  ?>
  </body>
  </html>