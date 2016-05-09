<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['invite_type'] = sanitize($_POST['invite_type']);
$_SESSION['choose_host'] = sanitize($_POST['choose_host']);

$host = $_SESSION['choose_host'];
$invite_type = $_SESSION['invite_type'];

if (isset($_POST['back_button'])){
	header("Location: ../../customizable_templates/invitations/customize_page_two.php");
	exit;
}

	// Redirect to formal_invitation based upon select values. 
    // Note: Update to case/switch later on.	
	if ( $host == 'couple' && $invite_type == 'formal_invitation' ) {
	  header("Location: ../../display_customized_templates/invitation_type/couple_formal_invitation.php");
	  exit;
	}
	elseif ( $host == 'brides_parents' && $invite_type == 'formal_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/brides_parents_formal_invitation.php");
	   exit;
	}
	elseif ( $host == 'grooms_parents' && $invite_type == 'formal_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/grooms_parents_formal_invitation.php");
	   exit;	
	}
	elseif ($host == 'both_parties' && $invite_type == 'formal_invitation') {
	   header("Location: ../../display_customized_templates/invitation_type/both_parties_formal_invitation.php");
	   exit;	
	}


	// Redirect to casual_invitation based upon select values. 
    // Note: Update to case/switch later on.

    if ( $host == 'couple' && $invite_type == 'casual_invitation' ) {
	  header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	  exit;
	}
	elseif ( $host == 'brides_parents' && $invite_type == 'casual_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	   exit;
	}
	elseif ( $host == 'grooms_parents' && $invite_type == 'casual_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	   exit;
	}
	elseif ( $host == 'grooms_parents' && $invite_type == 'casual_invitation' ) {
		header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
		exit;
	}
	elseif ($host == 'both_parties' && $invite_type == 'casual_invitation') {
		header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
		exit;
	}










