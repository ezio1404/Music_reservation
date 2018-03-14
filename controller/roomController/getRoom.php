<?php
require '../../model/roomModel.php';
$room = new Room();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->room_id;
$row = $room->getRoomById($id);
echo json_encode($row);