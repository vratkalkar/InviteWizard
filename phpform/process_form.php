<?php
//Get select option on submit and redirect to corresponding page
if(isset($_POST['form_submit'])){

	$user_choice = $_POST['chosen_template'];
	 switch($user_choice){
	 	case 'appy_stationery_pack':
	 	  header('Location: ../invite_templates/appy_suite_template.php')
		case 'wedding_invitation':
		  header('Location: ../invite_templates/invitation_template.php');
		  break;
		case 'mailing_address':
		  header("Location: ../invite_templates/mailing_address_template.php");
		  break;
		case 'save_the_date':
		  header("Location: ../invite_templates/save_the_date_template.php");
		  break;
		case 'notes':
		  header("Location: ../invite_templates/note_template.php");
		  break;
		case 'reminder':
		  header("Location: ../invite_templates/reminder_template.php");
		  break;
		case 'thank_you_card':
		  header("Location: ../invite_templates/thank_you_card_template.php");
		  break;
	}

 }
 
?>