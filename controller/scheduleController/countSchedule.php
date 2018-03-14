<?php
require '../../model/scheduleModel.php';
$schedule = new Schedule();
echo json_encode($schedule->getCountSchedule());
