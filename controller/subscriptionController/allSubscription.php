<?php
require '../../model/subscriptionModel.php';
$subscription = new Subscription();
echo json_encode($subscription->getAllSubscription());
