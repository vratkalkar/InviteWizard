<?php
session_start();

$parents_names = $_POST['parents_names']);
$spouse1 = $_POST['spouse1'];
$spouse2 = $_POST['spouse2'];
$venue = $_POST['venue'];
$date = $_POST['date'];

$_SESSION['parents_names'] = filter_var($parents_names, FILTER_SANITIZE_STRING);
$_SESSION['spouse1'] = filter_var($spouse1, FILTER_SANITIZE_STRING);
$_SESSION['spouse2'] = filter_var($spouse2, FILTER_SANITIZE_STRING);
$_SESSION['venue'] = filter_var($venue, FILTER_SANITIZE_STRING);
$_SESSION['date'] = filter_var($date, FILTER_SANITIZE_STRING);
header("Location: ../display_customized_templates/invitation.php");

?>