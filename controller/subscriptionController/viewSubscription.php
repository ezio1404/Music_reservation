<?php
require '../../model/subscriptionModel.php';
$subscription = new Subscription();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->subscription_id;
$row = $subscription->getSubscriptionById($id);
echo json_encode($row);