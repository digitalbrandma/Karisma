<?php

require_once("config/db.php");
require_once("connect.php");

 //get info from database   
$resultLang = mysql_query("SELECT id, text FROM page ")or die ('Error: '.mysql_error ());
$lang = array();

while($checkLang =  mysql_fetch_assoc($resultLang))
{
$count =  $checkLang['id'];
$lang[$count] = htmlspecialchars_decode($checkLang['text']);

}


function lang($id)
{
global $lang;
echo $lang[$id];
}

function modules($id)
{
global $lang;
return $lang[$id];
}

//OUTPUT lang("11");



?>