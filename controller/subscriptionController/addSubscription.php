<?php
require '../../model/subscriptionModel.php';
$subscription = new Subscription();
if(isset($_POST['addSubs'])){ 
    $flag=true;
    $subscription_name = htmlentities($_POST['subscription_name']);
    $subscription_price =  htmlentities($_POST['subscription_price']);
    $subsArr=array($subscription_name, $subscription_price);
    for($i=0;$i<count($subsArr);$i++){
        if($subsArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $subscription->addSubs($subsArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }

}