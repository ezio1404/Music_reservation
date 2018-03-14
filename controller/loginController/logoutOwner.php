<?php
require_once ('../../model/db/dbhelper.php');
if(session_destroy())
header("location:../../view/admin/login.php");
?>