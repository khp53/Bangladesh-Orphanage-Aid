<?php
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color:#f0f0f0;">
  <a class="navbar-brand" href="#">
  <img src="images/orphanage1.png" width="250" height="60" alt="">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Get Involved </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Sponsor.php">Sponsor</a>
          <a class="dropdown-item" href="Volunteers.php">Volunteer</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Events.php">Events</a></a>
        </div>
</li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;Contact Us</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><span class="glyphicon glyphicon-search"></span></button>
    </form>
  </ul>
  <div>&nbsp &nbsp &nbsp </div>
<ul class="nav navbar-nav navbar-right">
<li><a class="nav-link" href="donate.php"title="Donate"><span class="glyphicon glyphicon-usd"></span>&nbsp;Donate </a></li>
<li><a class="nav-link" href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

<?php
if($_SESSION['create_account_logged_in']!="")
{
?>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View Status</a>
  <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="profile.php">Profile</a></li>
        <div class="dropdown-divider"></div>
      <li><a class="dropdown-item"" href="logout.php">Logout</a></li>
  </ul>
</li>
<?PHP } else
{
?>
<li><a class="nav-link" href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
</li>
<?php
} ?>
</ul>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

