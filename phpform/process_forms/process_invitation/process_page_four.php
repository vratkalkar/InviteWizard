<?php
//Get select option on submit and redirect to corresponding page
if(isset($_POST['form_submit'])){
	$user_choice = $_POST['who_is_hosting'];
	 switch($user_choice){
		case 'couple':
		  header("Location: ../customizable_templates/invitations/customize_page_one.php");
		  break;
		case 'brides_parents':
		  header("Location: ../customizable_templates/customize_mailing_address.php");
		  break;
		case 'grooms_parents':
		  header("Location: ../customizable_templates/customize_save_the_date.php");
		  break;
		case 'both_parties':
		  header("Location: ../customizable_templates/customize_note.php");
		  break;
	}
 }
?>