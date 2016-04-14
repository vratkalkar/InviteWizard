<?php
session_start();
$_SESSION['parents_names'] = $_POST['parents_names'];
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['venue'] = $_POST['venue'];
$_SESSION['date'] = $_POST['date'];

$parents_names = $_SESSION['parents_names']; 
$spouse1 = $_SESSION['spouse1'];
$spouse2 = $_SESSION['spouse2'];
$venue = $_SESSION['venue'];
$date = $_SESSION['date'];
header("Location: ../display_customized_templates/invitation.php");
?>