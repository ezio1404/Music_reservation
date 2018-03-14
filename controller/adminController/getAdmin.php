<?php
require '../../model/adminModel.php';
$admin = new Admin();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->admin_id;
$row = $admin->getAdminById($id);
echo json_encode($row);