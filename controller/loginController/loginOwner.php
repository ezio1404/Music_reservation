<?php
require '../../model/loginModel.php';
$login = new Login();
if(isset($_POST['login'])){ // button name login 
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email!="" &&$email!="" ){
    $ok=$login->signInOwner($email,$password);
    if ($ok){
    header('location:../../view/admin/index.html'); // redirect page
    }
    else{
        header('location:../../index.html');
    }
	}
	else{
        header('location:../../#login');
    }
}