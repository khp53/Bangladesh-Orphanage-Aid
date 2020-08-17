<?php
class Sponsor{
  
    // database connection and table name
    private $conn;
    private $table_name = "sponsor_details";
  
    // object properties
    public $id;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $zip;
    public $inquary;
    public $money;
    public $event;
    public $payment;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }     
        function read(){
  
            // select all query
            $query = "SELECT
                        id, name, email, phone, address, city, zip, inquary, money, event, payment
                    FROM    
                        " . $this->table_name . "";
          
            // prepare query statement
            $stmt = $this->conn->prepare($query);
          
            // execute query
            $stmt->execute();
          
            return $stmt;
        }
}
