<?php
require '../../model/adminModel.php';
$admin = new Admin();
echo json_encode($admin->getAllAdmin());
