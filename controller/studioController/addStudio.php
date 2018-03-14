<?php
require '../../model/studioModel.php';
$Studio = new Studio();
if(isset($_POST['addStudio'])){ 
    $flag=true;
    $subscription_id = htmlentities($_POST['subscription_id']);
    $studio_name =  htmlentities($_POST['studio_name']);
    $studio_desc =  htmlentities($_POST['studio_desc']);
    $studio_address =  htmlentities($_POST['studio_address']);
    $studio_contact =  htmlentities($_POST['studio_contact']);
    $hour_open =  htmlentities($_POST['hour_open']);
    $hour_close =  htmlentities($_POST['hour_close']);
	$owner_fname =  htmlentities($_POST['owner_fname']);
    $owner_lname =  htmlentities($_POST['owner_lname']);
    $owner_email =  htmlentities($_POST['owner_email']);
    // $subscription_start =  htmlentities($_POST['subscription_start']);
    // $subscription_end =  htmlentities($_POST['subscription_end']);
    $studioArr=array($subscription_id ,$studio_name,$studio_desc,$studio_address,$studio_contact,$hour_open,$hour_close,$owner_fname,$owner_lname,$owner_email);
    for($i=0;$i<count($studioArr);$i++){
        if($studioArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Studio->addStudio($studioArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }

}