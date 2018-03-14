<?php
require '../../model/loginModel.php';
$login = new Login();
if(isset($_POST['login'])){ // button name login 
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email!="" &&$email!="" ){
    $ok=$login->logginOwner($email,$password);
    if ($ok){
    header('location:../../view/admin/index.html?id='.$_SESSION['studio_id'].''); // redirect page
    }
    else{
       echo '<script> window.location="../../view/admin/login.php"; </script>';
    }
	}
	else{
        header('location:../../#login');
    }
}