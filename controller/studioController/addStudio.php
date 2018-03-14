
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
    $subscription_start =  htmlentities($_POST['subscription_start']);
    $start = new DateTime( $subscription_start, new DateTimeZone("UTC"));
    $month_later = clone $start;
    switch ($subscription_id) {
        case '1':
            $month_later->add(new DateInterval("P1M"));
            break;
            case '2':
            $month_later->add(new DateInterval("P4M"));
            break;
            case '3':
            $month_later->add(new DateInterval("P6M"));
            break;
            case '4':
            $month_later->add(new DateInterval("P12M"));
            break;
    }
    $subscription_end =$month_later->format('Y-m-d');

    $studioArr=array($subscription_id ,$studio_name,$studio_desc,$studio_address,$studio_contact,$hour_open,$hour_close,$owner_fname,$owner_lname,$owner_email,$subscription_start, $subscription_end);
    for($i=0;$i<count($studioArr);$i++){
        if($studioArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Studio->addStudio($studioArr);
        echo '<script> alert("successfully added"); window.location="../../view/admin/login.php" </script>';
     }
     else{
         echo "ohshit";
     }

}