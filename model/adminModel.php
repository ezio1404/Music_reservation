<?php

require 'db/dbhelper.php';

Class Admin extends DBHelper{
    private $table = 'tbl_admin';
    private $fields = array(
        'admin_fname',
        'admin_lname',
        'admin_email',
        'admin_password'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addAdmin($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
 function getAdminById($ref_id){
    return DBHelper::getRecordById($this->table,'admin_id',$ref_id);
}
function getAdmin($ref_id){
    return DBHelper::getRecord($this->table.' a','a.admin_id',$ref_id);
}
// Retreive
 function getAllAdmin(){
     return DBHelper::getAllRecord($this->table);
 }
// Update
function updateAdmin($data,$ref_id){
    return DBHelper::updateRecord($this->table.'a',$this->fields,$data,'a.admin_id',$ref_id); 
 }
 // Delete
 function deleteAdmin($ref_id){
          return DBHelper::deleteRecord($this->table,'admin_id',$ref_id);
}
// Some Functions
    function getCountAdmin(){
        return DBHelper::countRecord('admin_id',$this->table);
    }
}