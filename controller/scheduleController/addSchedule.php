<?php
require '../../model/scheduleModel.php';
$Schedule = new Schedule();
if(isset($_POST['addSchedule'])){ 
    $flag=true;
    $studio_id = htmlentities($_POST['studio_id']);
    $room_id =  htmlentities($_POST['room_id']);
    $schedule_sdate =  htmlentities($_POST['schedule_sdate']);
    $schedule_stime =  htmlentities($_POST['schedule_stime']);
    $schedule_edate =  htmlentities($_POST['schedule_edate']);
    $schedule_etime =  htmlentities($_POST['schedule_etime']);
    $schedule_status =  htmlentities($_POST['schedule_status']);
    $scheduleArr=array($studio_id,$room_id,$schedule_sdate,$schedule_stime,$schedule_edate,$schedule_etime,$schedule_status);
    for($i=0;$i<count($scheduleArr);$i++){
        if($scheduleArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Schedule->addSchedule($scheduleArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }

}