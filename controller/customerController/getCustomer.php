<?php
require '../../model/customerModel.php';
$customer = new Customer();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->cust_id;
$row = $customer->getCustomerById($id);
echo json_encode($row);