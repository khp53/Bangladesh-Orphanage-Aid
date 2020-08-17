<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);
if(isset($login))
{
	if($eid=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";
	}
	else
	{
	$sql=mysqli_query($con,"select * from admin where username='$eid' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['admin_logged_in']=$eid;
		header('location:dashboard.php');
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css "href="glyphicons.css">
	<link rel="stylesheet" type="text/css "href="custom.css">
</head>
<body id="primary"style="margin-top:5px;">
	<?php
include('MenuBar.php');
	?>
	<br>
	<br>
	<br>
	<br>
<div class="container-fluid"> <!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
		<div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#fa6432;">

			<h1 align="center"><b><font style="font-family: 'Montserrat'; margin-top:10px;">Admin Login ?</font></b></h1>

          <img src="devlop/img1.png"alt="Bird" width="200" height="250"style="padding-top:30px;">

			<?php echo @$error;?>
          <form action="#" method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid" placeholder="Email Id"required>
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass" placeholder="Password"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-dark"required>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
<?php
include('Footer.php');
?>
</body>
</html>
