<?php
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="")
{
header('location:donate.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";
  }
  else
  {
  $sql=mysqli_query($con,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid;
    header('location:donate.php');
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>";
    }
  }
}
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
<br>
<br>
<br>
<div class="container-fluid"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#fa6432;"><br>

        	<h1 align="center"><b><font style="font-family: 'Montserrat';">User Login ?</font></b></h1>
          <img src="images/login/user.png" class="img-circle" alt="Bird" width="150" height="180">
          <?php echo @$error; ?>
          <form action="#" method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid"placeholder="Email Id" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-dark"required>
          <br>
          <div class="form-group forget">
            <br>
                <a style="color:black;" href="Forgot account.php">Forget Account</a>&nbsp; <b>|</b>&nbsp;
                <a style="color:black;" href="Registation form.php">Create an Account</a>
            </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
<?php
include('Footer.php')
?>
</body>
</html>
