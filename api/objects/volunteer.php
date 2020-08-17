<?php
class Volunteer{
    private $conn;
    private $table_name = "volunteer_details";
  
    // object properties
    public $id;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $event;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

        function read(){
  
            // select all query
            $query = "SELECT
                        id, name, email, phone, address, event
                    FROM    
                        " . $this->table_name . "";
          
            // prepare query statement
            $stmt = $this->conn->prepare($query);
          
            // execute query
            $stmt->execute();
          
            return $stmt;
        }
}
