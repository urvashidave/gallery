<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("init.php");
if($session->is_signed_in()){
    redirect("index.php");
    
}
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    //method to check database user
    
    $user_found = User::verify_user($username,$password);
    
    if($user_found){
        $session->login($user_found);
        redirect("index.php");
    }
    else{
        $the_message = "Your Password OR Username incorrect";
    }
}
else{
    $username='';
    $password='';
}