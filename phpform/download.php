<?php
set_time_limit(0); //disable time limit for the script

$path = "display_customized_templates/invitation_type/brides_parents_formal_invitation.php";
$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $_GET['download_file']); //file name validation
$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); //Remove additonal invalid characters

//var_dump($dl_file);

$fullFilePath = $path.$dl_file;

if ($fd = fopen($fullFilePath, "r")) {

	$fsize = filesize($fullFilePath);
	$path_parts = pathinfo($fullFilePath);
	$ext = strtolower($path_parts["extension"]);

	switch ($ext) {
		case 'php':
		    header("Content-type: application/octet-stream");
		    header("Content-type: image/png");
		    header("Content-Disposition: attachment; filename = appy_invite.png "); //"use 'attachment' to force file download"
		    break;
		    //Additional headers for other content types
		    default;
		    header("Content-type: application/octet-stream");
		    header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
		    break;	
	}
	header("Content-length: $fsize");
	header("Cache-control: private"); //to open files directly
	while(!feof($fd) ) {
		$buffer = fread($fd, 2048);
		echo $buffer;
	}
}
fclose($fd);
exit;
?>