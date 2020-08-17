<?php
include('connection.php');
error_reporting(1);
extract($_REQUEST);
if(isset($submit))
{
  $sql=mysqli_query($con,"select * from create_account where email='$email' ");
    if(mysqli_num_rows($sql))
    {
     $res=mysqli_fetch_assoc($sql);
    $error= "<h3 style='color:#fa6432'>Your Passwrod is :".$res['password']."</h3>";
    }
    else
    {
    $error= "<h3 style='color:red'>Invalid  details</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bangladesh Orphanage Aid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css "href="css/glyphicons.css">
  <link rel="stylesheet" type="text/css "href="css/custom.css">
</head>
<body style="margin-top:5px;">
<?php
include('MenuBar.php')
?>
<br>
<br>
<div class="container" style="background-color:#f5f5f5;"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h1 style="margin-top:50px;padding-top:50px;">Forgot Account?</h1><hr>
          <?php echo  @$error; ?>
          <p class="text-left">Please Enter your Email-id or Phone Number to Find Your Account.</p><br><br>
          <form method="post">
        <div class="form-group">
          <input type="Email" name="email" class="form-control" id="#"placeholder="Email Id or Phone Number"required>
        </div><hr>
          <input style="font-size:20px;"type="submit" value="Submit" name="submit" class="btn btn-dark"required>
        </form><br><br><br><br>
        </div>
    </div>
  </div>
</div>

<?php
include('Footer.php')
?>
</body>
</html>
