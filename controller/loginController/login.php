<?php
require '../../model/loginModel.php';
$login = new Login();
if(isset($_POST['login'])){ // button name login 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ok=$login->signIn($email,$password);
    if ($ok){
    header('location:../../view/home.php'); // redirect page
    }
    else{
        header('location:../../index.html');
    }
}
