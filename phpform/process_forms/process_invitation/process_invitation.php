<?php

if(isset($_POST['form_submit'])){

  $user_choice = $_POST['invite_type'];
    switch ($user_choice) {
      case 'formal':
	    header("Location: ../display_customized_templates/invitation_type/formal_invitation.php");
	    break;
      case 'casual':
	    header("Location: ../display_customized_templates/invitation_type/casual_invitation.php");
	    break;
  }
}
?>