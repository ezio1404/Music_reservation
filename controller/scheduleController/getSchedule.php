<?php
require '../../model/scheduleModel.php';
$schedule = new Schedule();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->schedule_id;
$row = $schedule->getScheduleById($id);
echo json_encode($row);