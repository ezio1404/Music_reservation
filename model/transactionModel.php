<?php

require 'db/dbhelper.php';

Class Transaction extends DBHelper{
    private $table = 'tbl_transaction';
    private $fields = array(
        'studio_id',
        'total_price',
        'transaction_status'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addTransaction($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
 function getTransactionById($ref_id){
    return DBHelper::getRecordById($this->table,'transaction_id',$ref_id);
}
function getTransaction($ref_id){
    return DBHelper::getRecord($this->table.' t','t.transaction_id',$ref_id);
}
// Retreive
 function getAllTransaction(){
     return DBHelper::getAllRecord($this->table);
 }
// Update
function updateTransaction($data,$ref_id){
    return DBHelper::updateRecord($this->table.'t',$this->fields,$data,'t.transaction_id',$ref_id); 
 }
 // Delete
 function deleteTransaction($ref_id){
          return DBHelper::deleteRecord($this->table,'transaction_id',$ref_id);
}
// Some Functions
    function getCountTransaction(){
        return DBHelper::countRecord('transaction_id',$this->table);
    }
}