<?php
require '../../model/transactionModel.php';
$transaction = new Transaction();
echo json_encode($transaction->getCountTransaction());
