<?php
ob_start();

session_start();
require("../helper_functions/sanitize.php"); 


$parents_names = sanitize($_POST['parents_names']);
$spouse1 = sanitize($_POST['spouse1']);
$spouse2 = sanitize($_POST['spouse2']);
$venue = sanitize($_POST['venue']);
$date = sanitize($_POST['date']);

$_SESSION['parents_names'] = $parents_names;
$_SESSION['spouse1'] = $spouse1;
$_SESSION['spouse2'] = $spouse2;
$_SESSION['venue'] = $venue;
$_SESSION['date'] = $date;
header("Location: ../display_customized_templates/invitation.php");

ob_end_flush();
?>