<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['invite_type'] = sanitize($_POST['invite_type']);
$_SESSION['choose_host'] = sanitize($_POST['choose_host']);

$host = $_SESSION['choose_host'];
$invite_type = $_SESSION['invite_type'];


	// Redirect to formal_invitation based upon select values. 
    // Note: Update to case/switch later on.	
	if ( $host == 'couple' && $invite_type == 'formal_invitation' ) {
	  header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	}
	elseif ( $host == 'brides_parents' && $invite_type == 'formal_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	}
	elseif ( $host == 'grooms_parents' && $invite_type == 'formal_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	}
	elseif ( $host == 'grooms_parents' && $invite_type == 'formal_invitation' ) {
		header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	}
	elseif ($host == 'both_parties' && $invite_type == 'formal_invitation') {
		header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	}


	// Redirect to casual_invitation based upon select values. 
    // Note: Update to case/switch later on.

    if ( $host == 'couple' && $invite_type == 'casual_invitation' ) {
	  header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	}
	elseif ( $host == 'brides_parents' && $invite_type == 'casual_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	}
	elseif ( $host == 'grooms_parents' && $invite_type == 'casual_invitation' ) {
	   header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	}
	elseif ( $host == 'grooms_parents' && $invite_type == 'casual_invitation' ) {
		header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	}
	elseif ($host == 'both_parties' && $invite_type == 'casual_invitation') {
		header("Location: ../../display_customized_templates/invitation_type/casual_invitation.php");
	}










