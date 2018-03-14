
<?php

require 'db/dbhelper.php';

Class Studio extends DBHelper{
    private $table = 'tbl_studio';
    private $fields = array(
        'subscription_id',
        'studio_name',
        'studio_desc',
        'studio_address',
        'studio_contact',
        'hour_open',
        'hour_close',
        'owner_fname',
        'owner_lname',
        'owner_email',
        'subscription_start',
        'subscription_end'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addStudio($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllStudio(){
     return DBHelper::getAllRecord($this->table);
 }
 function getStudioById($ref_id){
    return DBHelper::getRecordById($this->table,'studio_id',$ref_id);
}
function getStudio($ref_id){
    return DBHelper::getRecord($this->table.'st','st.studio_id',$ref_id);
}
// Update
function updateStudio($data,$ref_id){
    return DBHelper::updateRecord($this->table.'st',$this->fields,$data,'st.studio_id',$ref_id); 
 }
 // Delete
 function deleteStudio($ref_id){
          return DBHelper::deleteRecord($this->table,'studio_id',$ref_id);
}
// Some Functions
    function getCountStudio(){
        return DBHelper::countRecord('studio_id',$this->table);
    }
}