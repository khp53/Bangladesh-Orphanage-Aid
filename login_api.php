<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require "connection.php";
require "index.php";
$eid = new User();

header('Content-Type: application/json');
if (isset($_POST['req'])) 
{ 
    switch ($_POST['req']) 
    {
      case "login":
        if (is_array($_SESSION['eid'])) {
          die(json_encode([
            "status" => true,
            "message" => "Already signed in"
          ]));
        }
        $pass = $users->login($_POST['eid'], $_POST['pass']);
        if ($pass!==false) { $_SESSION['eid'] = $pass; }
        echo json_encode([
          "status" => is_array($pass),
          "message" => is_array($pass) ? "OK" : "Error"
        ]);
        break;

      case "logoff":
        unset($_SESSION['eid']);
        echo json_encode([
          "status" => true,
          "message" => "OK"
        ]);
        break;
    }
    echo "eee :" . $_SESSION['eid'];
}
else
{
    echo "error";
}
?>