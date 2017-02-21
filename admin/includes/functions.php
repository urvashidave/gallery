<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function  classAutoLoader($class){
    //scanning application catches undeclared 
    $class=  strtolower($class);
    $the_path = "includes/{$class}.php";
    
    if(is_file($the_path) && !class_exists($class))
    {
        include($the_path);
    }
    
}
//    if(file_exists($the_path)){
//             // echo("hello");
//        require_once($the_path);
//    }
//    else{
//  
//        die("this file named {$class}.php was not found");
//    }
function redirect($location){
    header("Location: {$location}");
    
   
}
spl_autoload_register('classAutoLoader');