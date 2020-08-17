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
    <li class="breadcrumb-item active" aria-current="page">Chittagong</li>
  </ol>
</nav>
<br>
<br>
<div class="container">
  <h2 style="color:#0B3954"><b>Chittagong</b></h2>
  <h5>
  <a href="MapCtg.php">
    View All Orphanage Maps
</a></h5>
<br>
  <?php
	$sql=mysqli_query($con,"select * from orphanage_details where id>5");
	while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
<span class="d-block p-3 m-3 bg-dark text-white">
    <h4 style="margin-left:20px;color:#EEB902;"><?php echo $r_res['no']; ?>&nbsp;<?php echo $r_res['name']; ?> </h4>
    <h7 style="margin-left:20px;"><?php echo $r_res['details']; ?><br>
    <b style="margin-left:20px;">Location:</b> <?php echo $r_res['location']; ?></h7><br>
    <br>
    <table>
      <tr><td>
    <?php
  include('stars.html')
  ?></td>
  <td>
    <a style="margin-left:650px; padding-bottom:5px;" href="donate.php" class="btn btn-danger"><span class="glyphicon glyphicon-usd"></span>&nbsp;Donate</button></a>
  </td>
  </tr></table>
  </span>
  <?php } ?> 
</div>
  <?php
  include('Footer.php')
  ?>
  </body>
  </html>