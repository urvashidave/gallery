<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include 'database.php';
class User {

    public $id;
    public $username;
    public $firstname;
    public $password;
    public $lastname;

    public static function find_all_user() {
        return self::find_this_query("SELECT * FROM users");
    }

    public static function find_user_by_id($user_id) {
        global $database;
        $the_result_array = self::find_this_query("SELECT * FROM users where id=$user_id LIMIT 1");
        return !empty($the_result_array) ? array_shift($the_result_array):false;
//        if(!empty($the_result_array)){
//           $first_item =  array_shift($the_result_array);
//           return $first_item;
//        }
//        else{
//            return false;
//        }
        return $found_user;
//    }
    }
    public static function find_this_query($sql) {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = self::instantiation($row);
        }
        return $the_object_array;
    }
    
    public static function verify_user() {
        global $database;
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "select * from users where ";
        $sql .=
                
                
        $result_set = $database->query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = self::instantiation($row);
        }
        return $the_object_array;
    }

    public static function instantiation($the_record) {
        $the_object = new self;
//        $the_object->username = $found_user['username'];
//        $the_object->id = $found_user['id'];
//        $the_object->firstname = $found_user['first_name'];
//        $the_object->lastname = $found_user['last_name'];
//        $the_object->password = $found_user['password'];
        foreach ($the_record as $the_attribute => $value) {
           if($the_object->has_the_attribute($the_attribute)){
               $the_object->$the_attribute = $value;
           }
               
        }
        return $the_object;
        
        
//        
    }
    
    private function has_the_attribute($the_attribute)
    {
        get_object_vars($this);
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

}
