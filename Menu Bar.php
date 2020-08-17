<?php
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<!--Menu Bar Close Here-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="images/orphanage12.png"/width="240px"height="65px"style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"title="Home">Home</a></li>
        <li><a href="about.php"title="About">About</a></li>
		    <li><a href="ContactUs.php"title="Contact Us">Contact Us</a></li>
        <li><a href="#"title="div">|</a></li>
        <li><a href="Sponsor.php">Sponsor</a></li>
        <li><a href="Volunteers.php">Volunteer</a></li>
        <li><a href="Events.php">Events</a></li>`
        	</ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="donate.php"title="Admin Login"><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Donate</a></li>
        <li><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        <?php
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li><a href="profile.php" title="View Profile">View Status <span class="caret"></span></a>
        <?PHP } else
		{
		?>
		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		<?php
		} ?>
      </ul>
    </div>
  </div>
</nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Menu Bar Close Here-->
