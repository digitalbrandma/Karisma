<?php
include "secure.php";
require_once("config/db.php");
require_once("classes/Login.php");
$login = new Login();

if ($login->isUserLoggedIn() == true) {


include "core.php"; 
include "connect.php";
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

     