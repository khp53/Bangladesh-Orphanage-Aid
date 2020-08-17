<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";
  }
  else
  {

      $sql="insert into create_account(name,email,password,mobile,address,gender,country,pictrure) values('$fname','$email','$Passw','$mobi','$addr','$gend','$countr','$pict')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
   header('location:Login.php');
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
  <link rel="stylesheet" type="text/css "href="css/glyphicons.css">
  <link rel="stylesheet" type="text/css "href="css/custom.css">
</head>
<body style="margin-top:5px;">
  <?php
include('MenuBar.php');
  ?>
<div class="container-fluid"> <!-- Primary Id-->
  <div class="container"style="background-color:#e3e6e4;>
    <div class="row">
      <center>
        <h1 style="background-color:#fa6432; padding-left: 200px; padding-right: 200px; padding-top:5px; padding-bottom:5px; border-radius:20px;display:inline-block;"><b><font color="#080808">Create New Account?</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <center><div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4 style="text-align:center;" >Name :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="text-align:center;">Email-Id:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="text-align:center;">Password :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="text-align:center;">Mobile No:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="text-align:center;">Address :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control"required></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="text-align:center;" id="top">Gender :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"required><b>Male</b>&emsp;
              <input type="radio" name="gend"value="female"required><b>Female</b>&emsp;
              <input type="radio" name="gend"value="others"required><b>Other</b>
          </div>
          </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="text-align:center;">Country :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
              <option>Bangladesh</option>
              <option>Malaysia</option>
              <option>China</option>
            </select>
        </div>
        </div>

        <div class="form-group">

          <div class="row">
            <div class="col-sm-6" style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-dark"/>
          </div>
          </div>
          </div>
        </form>
        <br>
        <br>
        </div>
      </center>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
</div>
<?php
    include('Footer.php')
?>
</body>
</html>
