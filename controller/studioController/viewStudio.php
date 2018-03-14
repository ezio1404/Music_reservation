<?php
require '../../model/studioModel.php';
$studio = new Studio();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->studio_id;
$row = $studio->getStudioById($id);
echo json_encode($row);