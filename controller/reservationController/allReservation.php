<?php
require '../../model/reservationModel.php';
$reservation = new Reservation();
echo json_encode($reservation->getAllReservation());
