<?php
session_start();
$parents_names = $_POST['parents_names'];
$spouse1 = $_POST['spouse1'];
$spouse2 = $_POST['spouse2'];
$venue = $_POST['venue'];
$date = $_POST['date'];

$_SESSION['parents_names'] = $parents_names;
$_SESSION['spouse1'] = $spouse1;
$_SESSION['spouse2'] = $spouse2;
$_SESSION['venue'] = $venue;
$_SESSION['date'] = $date;
header("Location: ../display_customized_templates/invitation.php");
?>