<?php
require '../../model/reservationModel.php';
$reservation = new Reservation();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->res_id;
$row = $reservation->getReservationById($id);
echo json_encode($row);