<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <img src="orphanage1.png" width="250" height="60" alt="">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../ContactUs.php">Contact Us</a>
      </li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Get Involved </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Sponsor.php">Sponsor</a>
          <a class="dropdown-item" href="../Volunteer.php">Volunteer</a>
          <div class="dropdown-divider"></div>
          <a class="../dropdown-item" href="Events.php">Events</a></a>
        </div>
</li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </ul>
  <div>&nbsp &nbsp &nbsp </div>
<ul class="nav navbar-nav navbar-right">
<li><a class="nav-link" href="../donate.php"title="Donate"><span class="glyphicon glyphicon-usd"></span>&nbsp;Donate </a></li>
<li><a class="nav-link" href="../admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

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
<li><a class="nav-link" href="../Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
</li>
<?php
} ?>
</ul>
  </div>
</nav>
