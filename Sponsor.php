<?php
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from sponsor_details where email='$eid' ");
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from sponsor_details where email='$email' and money='$money' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h2 style='color:green;text-align:center;'><b>Thanks For Sponsoring Again ^-^</b></h2>";
  }
  else
  {

   $sql="insert into sponsor_details(name,email,phone,address,city,state,zip,inquary,money,event,payment)
  values('$name','$email','$phone','$address','$city','$state','$zip','$inquary','$money','$event','$payment')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h3 style='color:green;text-align:center;'><b>You have Successfully sponsored ^-^ </b></h3>";
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css "href="css/glyphicons.css">
  <link rel="stylesheet" type="text/css "href="css/custom.css">

</head>
<body style="margin-top:70px;">

<div class="container"><!--Primary Id-->
  <br>
  <h1><b>Children thrive because of our amazing regular project sponsors<b></h1>
  <h3>All Orphans Aid International projects are funded by sponsorship, fundraising and gifts. Sponsorship is the life-blood of what we do. We fundraise hard and also run shops and an online store which help with a lot of our administration costs—but we quite simply cannot exist without consistent sponsorship.</h3>
  <br>
  <h4>Sponsorships can be designated to a specific project, area of need or help "where needed most". Sponsorship of a project goes to all the children in that project and not individual children. You are sponsoring the children in a whole project! We do this to keep administration costs to a minimum and also because in some places the children change regularly. We send out project updates via email and also the post to keep you informed.</h4>
  <br>
  <hr>
  <br>
  <h3>
    Will you help with regular sponsorship?
  </h3>
  <h4>
    If you can help please connect with us to discuss this, or if you are in Bangladesh, simply set up an automatic payment on your internet banking—bank account details below. If you don't have internet banking, you can print and complete an Automatic Payment Form and take it to your bank. We recommend a minimum of BDT 1000 a month or BDT 100 per week but respect your decision to sponsor any amount that is suited to you. For Credit Card donations, please see our donate page.

If you have started a sponsorship please supply us with your details below so we can be in regular contact with you and provide an annual receipt. You may prefer to make an annual or 6 monthly contribution.
</h4>
<br>
<hr>
<br>
<h2>
  <b>Starting a regular sponsorship?<b></h2>
<h2>Please let us know with the form below.</h3>
  <br>
  <br>
  <center><h2 style="background-color:#fa6432; padding-left: 100px; padding-right: 100px; padding-top:5px; padding-bottom:5px; border-radius:20px;display:inline-block;font-family: 'Montserrat';"><b>Sponsorship Form</b></h2></center><br>
  <div class="container" style="background-color:#f0f0f0; width:550px; height:650px;">
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

         <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4></h4></div>
          <div class="col-sm-8">
              <input type="text" class="form-control" value="<?php echo $result['country']; ?>" name="city" placeholder="Enter Your City Name"required>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4></h4></div>
          <div class="col-sm-8">
              <input type="text" name="state" class="form-control"placeholder="Enter Your State Name"required>
          </div>
        </div>
        </div>

		      <div class="form-group">
            <div class="row">
           <div class="control-label col-sm-4"><h4></h4></div>
          <div class="col-sm-8">
              <input type="text" name="zip" class="form-control" placeholder="Enter Your Zip Code"required>
          </div>
        </div>
        </div>
        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4 style="font-family: 'Montserrat';"><b>Inquiry :</h4></div>
          <div class="col-sm-8">
              <textarea name="ask" class="form-control" placeholder="Ask us anything"><?php echo $result['inquary'];  ?></textarea>
          </div>
        </div>
        </div>
        </div>

           <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4 style="font-family: 'Montserrat';"><b>Amount:</h4></div>
                  <div class="col-sm-7">
                <select class="form-control" name="money"required>
                  <option value="100">100 taka</option>
                  <option value="500">500 taka</option>
                  <option value="1000">1000 taka</option>
                  <option value="5000">5000 taka</option>
                  <option value="10000">10000 taka</option>

               </select>
              </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
           <div class="form-group">
             <div class="row">
               <div class="control-label col-sm-5"><h4 style="font-family: 'Montserrat';"><b>Select Event:</h4></div>
                 <div class="col-sm-7">
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
            <div class="form-group">
              <div class="row">
                <label class="control-label col-sm-5"><h4 style="font-family: 'Montserrat';"><b>Payment Option :</h4></label>
                <div class="col-sm-7">
                  <div class="radio-inline"><input type="radio" value="B-Kash" name="payment"required ><b>B-Kash</div>
                  <div class="radio-inline"><input type="radio" value="Debit-Card" name="payment" required><b>Debit Card</div>

                </div>
              </div>

            </div>

            <br>
            <br>
            <input style="font-size: 25px;margin-top:310px;margin-left:450px;border-radius:30px;" type="submit"value="Submit" name="savedata" class="btn btn-danger"required/>
          </div>

        </form></center><br>
        </div>
      </div>
    </div>
  </div>
<?php
include('Footer.php')
?>
</body>
</html>
