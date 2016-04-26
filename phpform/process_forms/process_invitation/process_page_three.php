<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['website_url'] = sanitize($_POST['website_url']);
$_SESSION['wedding_code'] = sanitize($_POST['wedding_code']);
header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php"); 
?>