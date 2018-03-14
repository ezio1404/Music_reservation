<?php
require '../../model/customerModel.php';
$customer = new Customer();
echo json_encode($customer->getCountCustomer());
