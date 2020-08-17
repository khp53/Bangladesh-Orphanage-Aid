<?php
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update create_account set name='$name',password='$pass',mobile='$mob',address='$add' where email='$eid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:#fa6432'><b>Profile Updated successfully<b></h3><br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bangladesh Orphanage Aid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css "href="css/glyphicons.css">
  <link rel="stylesheet" type="text/css "href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
 <?php
     $sql= mysqli_query($con,"select * from create_account where email='$eid' ");
     $result=mysqli_fetch_assoc($sql);
?>
<br>
<div class="container"style="background-color:#e8e8e8"><!--Primary Id-->
  <center><h1 style="background-color:#fa6432; padding-left: 200px; padding-right: 200px; padding-top:5px; padding-bottom:5px; border-radius:20px;display:inline-block;font-family: 'Montserrat';display:inline-block;"><b>User Profile</b></h1></center><br>
      <center><img src="images/login/user.png" alt="Bird" width="250" height="300"></center>
      <br>
      <br>
  <div class="container">
    <div class="row">
	<center><?php  echo $msg; ?></center>
     <form method="post">
       <div class="col-sm-6">
          <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="name" value="<?php echo $result['name']; ?>"class="form-control"/>
          </div>
        </div>
      </div>

      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Email-Id:</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['email']; ?>"class="form-control"readonly>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Password:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="pass" value="<?php echo $result['password']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Mobile:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="mob" value="<?php echo $result['mobile']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Address:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="add" value="<?php echo $result['address']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Gender:</h4></div>
                <div class="col-sm-8">
                 <strong><?php echo $result['gender']; ?></strong>
          </div>
        </div>
      </div>

      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-5"></div>
                <div class="col-sm-7	">
                 <input style="font-size:20px;"  type="submit" value="Update Profile" name="update" class="btn btn-success"/>
                 &nbsp; &nbsp; &nbsp;<a style="font-size:20px;" href="logout.php" class="btn btn-danger">Log Out </a>
          </div>
        </div>
      </div>
<br>
<br>
<br>
    </div>
<!--User Profile Update Query-->
        </form>
      </div>
   </div>
 </div>
<?php
include('Footer.php')
?>
</body>
</html>
