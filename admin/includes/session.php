<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of session
 *
 * @author urvashi
 */
class Session {

    //put your code here
    //login system
    private $signed_in = false;
    public $user_id;

    function __construct() {
        session_start();
        $this->check_the_login();
    }

    public function is_signed_in() {

        return $this->$signed_in;
    }

    public function login($user) {

        if ($user) {
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->signed_in = true;
        }
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;
    }

    private function check_the_login() {
        if (isset($_SESSION['user_id'])) {
            $this->$user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        } else {
            unset($_SESSION['user_id']);
            $this->signed_in = false;
        }
    }

}

$session = new Session();
