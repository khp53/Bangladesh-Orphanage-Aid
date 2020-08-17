<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/sponsor.php';
  
// instantiate database and sponsor object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$sponsor = new Sponsor($db);
  
// query sponsors
$stmt = $sponsor->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // sponsors array
    $sponsors_arr=array();
    $sponsors_arr["records"]=array();
  
    // retrieve our table contents
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
        $sponsor_item=array(
            "id" => $id,
            "name" => $name,
            "email" => html_entity_decode($email),
            "phone" => $phone,
            "address" => $address,
            "city" => $city,
            "zip" => $zip,
            "inquary" => $inquary,
            "money" => $money,
            "event" => $event,
            "payment" => $payment
        );
  
        array_push($sponsors_arr["records"], $sponsor_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show sponsors data in json format
    echo json_encode($sponsors_arr);
}
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no sponsors found
    echo json_encode(
        array("message" => "No sponsors found.")
    );
}