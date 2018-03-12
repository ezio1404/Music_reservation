<?php

require 'db/dbhelper.php';

Class Schedule extends DBHelper{
    private $table = 'tbl_schedule';
    private $fields = array(
        'studio_id',
        'room_id',
        'schedule_sdate',
        'schedule_stime',
        'schedule_edate',
        'schedule_etime',
        'schedule_status'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addSchedule($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllSchedule(){
     return DBHelper::getAllRecord($this->table);
 }
// Update
function updateSchedule($data,$ref_id){
    return DBHelper::updateRecord($this->table.'sc',$this->fields,$data,'sc.schedule_id',$ref_id); 
 }
 // Delete
 function deleteSchedule($ref_id){
          return DBHelper::deleteRecord($this->table,'schedule_id',$ref_id);
}
// Some Functions
    function getCountSchedule(){
        return DBHelper::countRecord('schedule_id',$this->table);
    }
}