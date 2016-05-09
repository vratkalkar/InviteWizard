<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['website_url'] = sanitize($_POST['website_url']);
$_SESSION['wedding_code'] = sanitize($_POST['wedding_code']);

if (isset($_POST['back_button'])){
	header("Location: ../../customizable_templates/invitations/customize_page_one.php");
}
else {
	header("Location: ../../customizable_templates/invitations/customize_page_three.php");
}
?>