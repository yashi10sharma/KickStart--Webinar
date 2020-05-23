<?php
error_reporting(1);
session_start();
if($_SESSION['instructor']==""){
    $data='#LOG';
    $sign='SignIn';
    header("Location: index.php");
}
else{
    $data='';
    $name=$_SESSION['instructor'];
    $code="<li><a href='logout.php'>Logout</a></li>";
    $sign='Welcome, '.$name;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require 'header-links.php' ?>
    </head>
    <body>
        <?php require 'navbar.php' ?>
        <div class="container">
            <div class="row ">
                <div class="col-md-6 ">
                <div class="panel panel-danger">
                    <div class="panel-heading ">
                        <h3 class="panel-title text-center">Create Online Class</h3>
                    </div>
                    <div class="panel-body">
                    <?php require 'classform.php' ?>
                    </div>
                </div><!--PANEL CLOSE-->
              </div><!-- COLUMN CLOSE col-md-6 1st part-->
              <div class="col-md-6">
              <div class="panel panel-danger">
                    <div class="panel-heading ">
                        <h3 class="panel-title text-center">Create Live Class</h3>
                    </div>
                    <div class="panel-body">
                    <?php require 'classform.php' ?>
                    </div>
                </div><!--PANEL CLOSE-->
              </div><!-- COLUMN CLOSE col-md-6 2nd part-->
            </div><!-- ROW CLOSE -->
        </div><!-- CONTAINER CLOSE-->
        <!-- MODAL FOR LOGGING -->
        <?php require 'Logging.php' ?>
    </body>
</html>