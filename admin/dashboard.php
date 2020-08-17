<?php
session_start();
extract($_REQUEST);
include('../connection.php');
$admin=$_SESSION['admin_logged_in'];
if($admin=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="dashboard.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
  </style>
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>WELCOME</b> <?php echo $admin; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php?option=admin_profile">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="dashboard.php?option=update_password">Update Password</a></li>
            <li><a href="dashboard.php?option=orphanages">Orphanage Details</a></li>
			      <li><a href="dashboard.php?option=donation_details">Donation Details</a></li>
						<li><a href="dashboard.php?option=sponsor_details">Sponsor Details</a></li>
						<li><a href="dashboard.php?option=volunteer_details">Volunteer Details</a></li>
            <li><a href="dashboard.php?option=user_registration">User Registration</a></li>
          </ul>
          </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php
@$opt=$_GET['option'];
if($opt=="")
{
include('reports.php');
}
else
{
	if($opt=="update_password")
	{
	include('update_password.php');
	}
	else if($opt=="orphanages")
	{
	include('orphanages.php');
	}
	else if($opt=="add_orphanages")
	{
	include('add_orphanages.php');
	}
	else if($opt=="delete_orphanage")
	{
	include('delete_orphanage.php');
	}
  else if($opt=="update_orphanage")
  {
    include('update_orphanage.php');
  }
  else if($opt=="donation_details")
  {
    include('donation_details.php');
  }
	else if($opt=="sponsor_details")
	{
		include('sponsor_details.html');
	}
	else if($opt=="volunteer_details")
	{
	  include('volunteer_details.html');
	}
  else if($opt=="user_registration")
  {
    include('user_registration.php');
  }
  else if($opt=="admin_profile")
  {
    include('admin_profile.php');
  }
}
?>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
