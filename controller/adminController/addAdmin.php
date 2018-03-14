<?php
require '../../model/adminModel.php';
$Admin = new Admin();
if(isset($_POST['addAdmin'])){ 
    $flag=true;
    $admin_fname = htmlentities($_POST['admin_fname']);
    $admin_lname =  htmlentities($_POST['admin_lname']);
    $admin_email =  htmlentities($_POST['admin_email']);
    $admin_password =  htmlentities($_POST['admin_password']);
    $adminArr=array($admin_fname, $admin_lname,$admin_email,$admin_password);
    for($i=0;$i<count($adminArr);$i++){
        if($adminArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Admin->addAdmin($adminArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }
}