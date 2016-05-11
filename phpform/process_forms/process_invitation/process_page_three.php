<?php
session_start();
include("../../helper_functions/sanitize.php");

//To check the button selected corresponds
if( isset($_POST['invite_type']) ){
    $_SESSION['invite_type'] = $_POST['invite_type'];
}
if( isset($_POST['choose_host']) ){
    $_SESSION['choose_host'] = $_POST['choose_host'];
}

$host = $_SESSION['choose_host'];
$invite_type = $_SESSION['invite_type'];


if (isset($_POST['back_button'])){
	header("Location: ../../customizable_templates/invitations/customize_page_two.php");
	exit;
}

if (isset($_POST['form_submit']) ) {

  // Redirect to formal_invitation based upon select values. 
    // Note: Update to case/switch later on.	
	if ( $host == "Couple (Us)" && $invite_type == "Formal" ) {
	  header("Location: ../../display_customized_templates/invitation_type/couple_formal_invitation.php");
	  exit;
	}
	elseif ( $host == "Brides's Parents" && $invite_type == "Formal" ) {
	   header("Location: ../../display_customized_templates/invitation_type/brides_parents_formal_invitation.php");
	   exit;
	}
	elseif ( $host == "Groom's Parents" && $invite_type == "Formal" ) {
	   header("Location: ../../display_customized_templates/invitation_type/grooms_parents_formal_invitation.php");
	   exit;	
	}
	elseif ($host == "Both Parties" && $invite_type == "Formal") {
	   header("Location: ../../display_customized_templates/invitation_type/both_parties_formal_invitation.php");
	   exit;	
	}


	// Redirect to casual_invitation based upon select values. 
    // Note: Update to case/switch later on.

    if ( $host == "Couple (Us)" && $invite_type == "Casual" ) {
	  header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	  exit;
	}
	elseif ( $host == "Bride's Parents" && $invite_type == "Casual" ) {
	   header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	   exit;
	}
	elseif ( $host == "Groom's Parents" && $invite_type == "Casual" ) {
	   header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	   exit;
	}
	elseif ( $host == "Both Parties" && $invite_type == "Casual" ) {
		header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
		exit;
	}





}

	









