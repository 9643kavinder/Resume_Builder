<?php
error_reporting();
ob_start();
session_start();
include 'userdata.inc.php';
session_destroy();
header('Location:login_form.php');
?>