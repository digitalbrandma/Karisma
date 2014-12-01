<?php
include "secure.php";
require_once("config/db.php");
require_once("classes/Login.php");
$login = new Login();

if ($login->isUserLoggedIn() == true) {


include "core.php"; 
include "connect.php";




//GET PAGE ID
if(isset($_GET['view'])) {$view = $_GET['view'];} else {$view = "main";}
if(isset($_GET['act'])) {$act = $_GET['act'];} else {$act = "none";}


//update if isset update
//UPDATE NEW ENTRY
if(isset($_POST['act']) and $_POST['act']=="update"){
$id = $_POST['id'];
$text = $_POST['text'];


//end update photo

foreach( $id as $key => $n ) {
$execute = "UPDATE `page` SET text='".$text[$key]."' WHERE id='".$n."'";
mysql_query("$execute") or die ('Error:42 '.mysql_error ());
//echo "<br><br><br><h1>$execute</h1>";
}


header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/admin/page.php?view=".$view."&act=updated&id=46"); exit();


}//end update




include "pages/head.php"; 
?>
        
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
<?php include "pages/left.php"; ?>           

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Dashboard<small>Control panel</small></h1>

<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Dashboard</li>
</ol>
</section>
<!-- Main content -->
<section class="content">







<?php
if($act=="updated"){echo"<div class='alert alert-success' role='alert'>Information Updated</div>";}
elseif($act=="none"){echo"<div class='alert alert-warning' role='alert'>No parametrs</div>";}
?>


<table class="table table-hover">
<?php

switch ($act) {
case "edit":    
//----------------------------  
//get info from database   
$result = mysql_query("SELECT id, text FROM page WHERE page = '$view' ORDER BY id DESC")or die ('Error: '.mysql_error ());
 echo"<form method='post' action='page.php?view=$view'>";
while($check =  mysql_fetch_array($result))
{
$id = $check['id'];
$text = $check['text'];

echo"
<tr>
<td>$text</td>
<td>&nbsp;</td>
<td width='' style='text-align:center; vertical-align: middle;'>
<textarea name='text[]' class='form-control' style='margin: 0px; height: 125px; width: 450px;'>$text</textarea>
</td>
</tr>
<input type='hidden' name='id[]' value='$id'>
";      
}  
echo"</table>
<hr>
<input type='submit' value='Simpan' class='btn btn-default'>
<input type='hidden' name='act' value='update'>
</form>";
//--------------------------  
break;



case "about":    

break;

}

?>


</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

        


<?php

include"pages/footer.php";

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}

     