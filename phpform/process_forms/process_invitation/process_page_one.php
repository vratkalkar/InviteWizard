<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['invite_type'] = sanitize($_POST['invite_type']);
$_SESSION['parents_names'] = sanitize($_POST['parents_names']);
$_SESSION['spouse1'] = sanitize($_POST['spouse1']);
$_SESSION['spouse2'] = sanitize($_POST['spouse2']);
header("Location: ../../customizable_templates/invitations/customize_page_two.php");
?>