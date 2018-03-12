<?php

require 'db/dbhelper.php';

Class Room extends DBHelper{
    private $table = 'tbl_room';
    private $fields = array(
        'room_name',
        'room_location',
        'room_maxperson',
        'room_price',
        'room_desc',
        'room_image',
        'studio_id'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addRoom($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllRoom(){
     return DBHelper::getAllRecord($this->table);
 }
// Update
function updateRoom($data,$ref_id){
    return DBHelper::updateRecord($this->table.'r',$this->fields,$data,'r.room_id',$ref_id); 
 }
 // Delete
 function deleteRoom($ref_id){
          return DBHelper::deleteRecord($this->table,'room_id',$ref_id);
}
// Some Functions
    function getCountRoom(){
        return DBHelper::countRecord('room_id',$this->table);
    }
}