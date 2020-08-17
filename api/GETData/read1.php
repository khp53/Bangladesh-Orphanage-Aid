<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/volunteer.php';
  
// instantiate database and volunteer object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$volunteer = new Volunteer($db);
  
// query volunteers
$stmt = $volunteer->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // volunteers array
    $volunteers_arr=array();
    $volunteers_arr["records1"]=array();
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $volunteer_item=array(
            "id" => $id,
            "name" => $name,
            "email" => html_entity_decode($email),
            "phone" => $phone,
            "address" => $address,
            "event" => $event
        );
  
        array_push($volunteers_arr["records1"], $volunteer_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show volunteers data in json format
    echo json_encode($volunteers_arr);
}
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no volunteers found
    echo json_encode(
        array("message" => "No volunteers found.")
    );
}