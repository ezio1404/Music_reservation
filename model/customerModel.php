<?php

require 'db/dbhelper.php';

Class Customer extends DBHelper{
    private $table = 'tbl_customer';
    private $fields = array(
        'cust_fname',
        'cust_lname',
        'cust_email',
        'cust_password'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addCust($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllCust(){
     return DBHelper::getAllRecord($this->table);
 }
 function getCustById($ref_id){
    return DBHelper::getRecordById($this->table,'cust_id',$ref_id);
}
function getCust($ref_id){
    return DBHelper::getRecord($this->table.' c','c.cust_id',$ref_id);
}
// Update
function updateCust($data,$ref_id){
    return DBHelper::updateRecord($this->table.'c',$this->fields,$data,'c.cust_id',$ref_id); 
 }
 // Delete
 function deleteCust($ref_id){
          return DBHelper::deleteRecord($this->table,'cust_id',$ref_id);
}
// Some Functions
    function getCountCust(){
        return DBHelper::countRecord('cust_id',$this->table);
    }
}