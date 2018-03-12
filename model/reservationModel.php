<?php

require 'db/dbhelper.php';

Class Reservation extends DBHelper{
    private $table = 'tbl_reservation';
    private $fields = array(
        'res_date',
        'res_time',
        'res_status',
        'no_of_guest',
        'studio_id',
        'customer_id',
        'room_id'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addReservation($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllReservation(){
     return DBHelper::getAllRecord($this->table);
 }
// Update
function updateReservation($data,$ref_id){
    return DBHelper::updateRecord($this->table.'rs',$this->fields,$data,'rs.res_id',$ref_id); 
 }
 // Delete
 function deleteReservation($ref_id){
          return DBHelper::deleteRecord($this->table,'res_id',$ref_id);
}
// Some Functions
    function getCountReservation(){
        return DBHelper::countRecord('res_id',$this->table);
    }
}