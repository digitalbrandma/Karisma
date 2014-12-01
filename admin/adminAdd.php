<?php
include "secure.php";
require_once("config/db.php");
require_once("classes/Login.php");
$login = new Login();

if ($login->isUserLoggedIn() == true) {


include "core.php"; 
include "connect.php";


//update if isset update
//UPDATE NEW ENTRY
if(isset($_POST['act']) and $_POST['act']=="insert"){
$page = $_POST['page'];
$text = $_POST['text'];

$execute = "INSERT INTO `page` (page, text) VALUES ('$page', '$text')";

mysql_query("$execute") or die ('Error:42 '.mysql_error ());

$res = "<div class='alert alert-success' role='alert'>&nbsp; &lt;?php lang(&quot;". mysql_insert_id()."&quot;); ?&gt;&nbsp;&nbsp;&#60;&#33;&#45;&#45;".$text." &#45;&#45;&#62;</div>";

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

<?php echo"$res"; ?>
<table class="table table-hover">
<form method="post">
<tr>
<td>
<input type="text" name="page" value="" class='form-control' style='margin: 0px; width: 450px;'>
</td>
</tr>
<tr>
<td>
<textarea class='form-control' style='margin: 0px; height: 125px; width: 450px;' name="text"></textarea>
</td>
</tr>
</table>
<hr>
<input type='submit' value='Simpan' class='btn btn-default'>
<input type='hidden' name='act' value='insert'>
</form>

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
