<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['parents_names'] = sanitize($_POST['parents_names']);
$_SESSION['spouse1'] = sanitize($_POST['spouse1']);
$_SESSION['spouse2'] = sanitize($_POST['spouse2']);
$_SESSION['venue'] = sanitize($_POST['venue']);
$_SESSION['address'] = sanitize($_POST['address']);
$_SESSION['date'] = sanitize($_POST['date']);
$_SESSION['time'] = sanitize($_POST['time']);
header("Location: ../../customizable_templates/invitations/customize_page_two.php");
?>