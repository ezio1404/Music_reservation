<?php
require '../../model/roomModel.php';
$room = new Room();
echo json_encode($room->getAllRoom());
