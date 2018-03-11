<?php

require 'db/dbhelper.php';

Class Login extends DBHelper{

    function __construct(){
        return DBHelper::__construct();
    }

    function signIn($email,$pass){
        return DBHelper::logginUser($email,$pass);
    }
}