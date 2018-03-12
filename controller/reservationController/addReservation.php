<?php
require '../../model/reservationModel.php';
$Reservation = new Reservation();
if(isset($_POST['addreservation'])){ 
    $flag=true;
    $res_date = htmlentities($_POST['res_date']);
    $res_time =  htmlentities($_POST['res_time']);
    $res_status =  htmlentities($_POST['res_status']);
    $no_of_guest =  htmlentities($_POST['no_of_guest']);
    $studio_id =  htmlentities($_POST['studio_id']);
    $customer_id =  htmlentities($_POST['customer_id']);
    $room_id =  htmlentities($_POST['room_id']);
    $reservationArr=array($res_date,$res_time,$res_status,$no_of_guest,$studio_id,$customer_id,$room_id);
    for($i=0;$i<count($reservationArr);$i++){
        if($reservationArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Reservation->addReservation($reservationArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }

}