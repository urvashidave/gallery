<?php include("includes/header.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$database = new Database();
$database->open_db_connection();
$bmw = new Car();
$bmw->run();
?>

