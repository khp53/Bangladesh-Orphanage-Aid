<?php
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from volunteer_details where email='$eid' ");
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from volunteer_details where email='$email' and money='$money' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h2 style='color:green;text-align:center;'><b>Thanks For volunteering Again ^-^</b></h2>";
  }
  else
  {

   $sql="insert into volunteer_details(name,email,phone,address,event)
  values('$name','$email','$phone','$address','$event')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h3 style='color:green;text-align:center;'><b>You have Successfully Added to our list ^-^ </b></h3>";
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
<br>
<div class="container"><!--Primary Id-->
  <font color="#fa6432;"><h1><b>
    Become A Volunteer<b></h1></font>
      <h4>They meet so many needs both locally and further afield. The local vibe and the friendly atmosphere create an environment that keeps you coming back for more. Yes, they are contagious.
We invite you to shop at our Opshops, our Online Store and our Queenstown Fair Trade Shop. This is a tremendous way to turn daily activities into aid for orphans.

Maybe you would like to take it a step further and volunteer. We are often recruiting and building our teams. Please visit a location near to you and apply to volunteer at a shop near you.</h4>
      <br>
      <hr>
      <br>
      <h3><b>Fill up the form below to apply as a volunteer</b></h3>
      <br>
      <hr>
      <br><center>
      <div class="container" style="background-color:#ede72f;">
        <div class="row">
          <?php echo @$msg; ?><br>
          <!--Form Containe Start Here-->
          <center>
         <form  method="post">
           <div class="col-sm-6">
             <div class="form-group">
               <div class="row">
                  <div class="col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Name :</h4></div>
                    <div class="col-sm-8">
                     <input type="text" value="<?php echo $result['name']; ?>" class="form-control" name="name" placeholder="Enter Your Frist Name"required>
              </div>
            </div>
          </div>

            <div class="form-group">
              <div class="row">
               <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Email :</h4></div>
              <div class="col-sm-8">
                  <input type="email" value="<?php echo $result['email']; ?>" class="form-control" name="email"  placeholder="Enter Your Email-Id"required/>
              </div>
            </div>
            </div>

            <div class="form-group">
              <div class="row">
               <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Mobile :</h4></div>
              <div class="col-sm-8">
                  <input type="number" value="<?php echo $result['mobile']; ?>" class="form-control" name="phone" placeholder="Type Your Phone Number"required>
              </div>
            </div>
            </div>

            <div class="form-group">
              <div class="row">
               <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Address :</h4></div>
              <div class="col-sm-8">
                  <textarea name="address" class="form-control" placeholder="Enter Your Address"><?php echo $result['address'];  ?></textarea>
              </div>
            </div>
            </div>

              <div class="col-sm-8">
               <div class="form-group">
                 <div class="row">
                   <div class="control-label col-sm-6"><h4 style="font-family: 'Montserrat';"><b>Select Event:</h4></div>
                    <div class="col-sm-4">
                   <select class="form-control" name="event"required>
                     <option value="Dhaka 10th Aug">Dhaka 10th Aug</option>
                     <option value="Sylhet 5th Aug">Sylhet 5th Aug</option>
                     <option value="Chittagong 8th Aug">Chittagong 8th Aug</option>
                     <option value="Rajshahi 11th Aug">Rajshahi 11Th Aug</option>

                  </select>
                 </div>
                 </div>
               </div>
             </div>

              <div class="col-sm-6">
                <input style="font-size: 25px;margin-top:10px;margin-left:480px;margin-bottom:20px;border-radius:10px;" type="submit"value="Submit" name="savedata" class="btn btn-danger"required/>
              </div>

            </form></center><br>
            </div>
          </div>
        </center>
        </div>

    <?php
    include('Footer.php')
    ?>
