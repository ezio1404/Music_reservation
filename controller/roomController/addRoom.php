<?php
require '../../model/roomModel.php';
$room = new Room();
if(isset($_POST['addroom'])){ 
    $flag=true;
    $room_name = htmlentities($_POST['room_name']);
    $room_location =  htmlentities($_POST['room_location']);
    $room_maxperson =  htmlentities($_POST['room_maxperson']);
    $room_price =  htmlentities($_POST['room_price']);
    $room_desc =  htmlentities($_POST['room_desc']);
    // $room_image =  htmlentities($_POST['room_image']);
    $studio_id =  htmlentities($_POST['studio_id']);
    // $roomArr=array($room_name,$room_location,$room_maxperson,$room_price,$room_desc,$room_image,$studio_id);
	$roomArr=array($room_name,$room_location,$room_maxperson,$room_price,$room_desc,$studio_id);
    for($i=0;$i<count($roomArr);$i++){
        if($roomArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $room->addRoom($roomArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }

}