<?php
// SET ERROR REPORTING
//error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
//error_reporting(E_ALL | E_WARNING | E_NOTICE);
//ini_set('display_errors', TRUE);

// THIS FUNCTION STRIPSLASHES AND ENCODES HTML ENTITIES FOR SECURITY PURPOSES
// INPUT: $value REPRESENTING A STRING OR ARRAY TO CLEAN
// OUTPUT: THE ARRAY OR STRING WITH HTML CHARACTERS ENCODED
function security($value) {
	if(is_array($value)) {
	  $value = array_map('security', $value);
	} else {
	  if(!get_magic_quotes_gpc()) {
	    $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	  } else {
	    $value = htmlspecialchars(stripslashes($value), ENT_QUOTES, 'UTF-8');
	  }
	  $value = str_replace("\\", "\\\\", $value);
	}
	return $value;
} // END security() FUNCTION

// ENSURE NO SQL INJECTIONS THROUGH POST OR GET ARRAYS
$_POST = security($_POST);
$_GET = security($_GET);
$_COOKIE = security($_COOKIE);
