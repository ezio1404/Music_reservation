<?php
require '../../model/transactionModel.php';
$transaction = new Transaction();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->transaction_id;
$row = $transaction->getTransactionById($id);
echo json_encode($row);