<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['invite_type'] = sanitize($_POST['invite_type']);
header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php"); 
?>