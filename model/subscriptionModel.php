<?php

require 'db/dbhelper.php';

Class Subscription extends DBHelper{
    private $table = 'tbl_subscription';
    private $fields = array(
        'subscription_name',
        'subscription_price'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addSubs($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllSubs(){
     return DBHelper::getAllRecord($this->table);
 }
 function getSubsById($ref_id){
    return DBHelper::getRecordById($this->table,'subscription_id',$ref_id);
}
function getSubs($ref_id){
    return DBHelper::getRecord($this->table.' s','s.subscription_id',$ref_id);
}
// Update
function updateSubs($data,$ref_id){
    return DBHelper::updateRecord($this->table.'s',$this->fields,$data,'s.subscription_id',$ref_id); 
 }
 // Delete
 function deleteSubs($ref_id){
          return DBHelper::deleteRecord($this->table,'subscription_id',$ref_id);
}
// Some Functions
    function getCountSubs(){
        return DBHelper::countRecord('subscription_id',$this->table);
    }
}