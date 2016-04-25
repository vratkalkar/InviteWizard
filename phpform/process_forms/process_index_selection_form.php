<?php
//Get select option on submit and redirect to corresponding page
if(isset($_POST['form_submit'])){
	$user_choice = $_POST['chosen_template'];
	 switch($user_choice){
		case 'wedding_invitation':
		  header("Location: ../customizable_templates/invitations/customize_page_one.php");
		  break;
		case 'mailing_address':
		  header("Location: ../customizable_templates/customize_mailing_address.php");
		  break;
		case 'save_the_date':
		  header("Location: ../customizable_templates/customize_save_the_date.php");
		  break;
		case 'notes':
		  header("Location: ../customizable_templates/customize_note.php");
		  break;
		case 'reminder':
		  header("Location: ../customizable_templates/customize_reminder.php");
		  break;
		case 'thank_you_card':
		  header("Location: ../customizable_templates/customize_thank_you_card.php");
		  break;
	}
 }
?>