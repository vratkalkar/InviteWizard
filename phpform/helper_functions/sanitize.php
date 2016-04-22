<?php
function cleanInput($input) {

	$search = array(
	'@<script[^>]*?>.*?</script>@si',   // Remove JavaScript tags
    '@<[\/\!]*?[^<>]*?>@si',            // Remove HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Remove CSS/Style tags 
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Remove multi-line comments tags
   );

	$output = preg_replace($search, '', $input);
	return $output;
  }

 function sanitize($input) {
 	
 	if (is_array($input)) {
 		foreach($input as $var=>$val) {
 			$output[$var] = sanitize($val);
 		}
 	}
 	else {
 		if (get_magic_quotes_gpc()) {
 			$input = stripslashes($input);
 		}
 		$output = cleanInput($input);	
 	}
 	return $output;
 }
?>