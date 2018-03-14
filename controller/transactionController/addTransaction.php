<?php
require '../../model/transactionModel.php';
$Transaction = new Transaction();
if(isset($_POST['addCust'])){ 
    $flag=true;
    $studio_id = htmlentities($_POST['studio_id']);
    $total_price =  htmlentities($_POST['total_price']);
    $transaction_status =  htmlentities($_POST['transaction_status']);
    $custArr=array($studio_id,$total_price,$transaction_status);
    for($i=0;$i<count($custArr);$i++){
        if($custArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Transaction->addTransaction($custArr);
        header('location:../../view/index.html');
     }
     else{
         echo "ohshit";
     }

}