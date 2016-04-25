<?php
session_start();
$_SESSION['website_url'] = $_POST['website_url'];
$_SESSION['wedding_code'] = $_POST['wedding_code'];

if(isset[$_POST['form_submit']]){
	header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
}
?>