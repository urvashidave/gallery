<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';
class Database {

    public $connection;
    function __construct(){
       $this->open_db_connection(); 
    }

    public function open_db_connection() {
        //$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
       // echo "i called";
        
        if ($this->connection->connect_errno) {
            die("Connection failed" . $this->connection->connect_error);
        }
    }
    public function query($sql){
        $result = $this->connection->query($sql);   
        $this->confirm_query($result);
        return $result;
    }
    private function confirm_query($result){
        if(!$result){
            die('query failed'.$this->connection->error);
        }
    }
    public function escape_string($string){
    $escape_string =  $this->connection->real_escape_string($string);
    return $escape_string;
        
    }
    public function the_insert_id(){
        return $this->connection->insert_id;
    }
    

}
$database = new Database();
?>

