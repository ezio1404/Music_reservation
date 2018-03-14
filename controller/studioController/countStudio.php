<?php
require '../../model/studioModel.php';
$studio = new Studio();
echo json_encode($studio->getCountStudio());
