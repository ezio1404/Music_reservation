<?php
require '../../model/customerModel.php';
$Customer = new Customer();
if(isset($_POST['addCust'])){ 
    $flag=true;
    $cust_fname = htmlentities($_POST['cust_fname']);
    $cust_lname =  htmlentities($_POST['cust_lname']);
    $cust_email =  htmlentities($_POST['cust_email']);
    $cust_password =  htmlentities($_POST['cust_password']);
    $custArr=array($cust_fname, $cust_lname,$cust_email,$cust_password);
    for($i=0;$i<count($custArr);$i++){
        if($custArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Customer->addCust($custArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }

}