<?php require 'connection.php' ;
error_reporting(0);
session_start();
if($_SESSION['instructor']==""){
    $data='#LOG';
    $sign='SignIn';
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
        <!-- Nav BAR -->
        <div class="container">
            <div class="row">
                 <!-- JOIN MEETING FORM -->
                 <div class="col-md-3"></div>
                <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading ">
                        <h3 class="panel-title text-center">Join Meeting</h3>
                    </div>
                    <div class="panel-body">
                    <?php require 'joinform.php' ?>
                    </div>
                </div>
                </div>
                <!---->
                <div class="col-md-3"></div>
            </div>    
        </div>
        <?php require 'Logging.php' ?>
    </body>
    <script type = "text/javascript">
         <!--
            function Redirect() {
               window.location = "classroom.php";
            }
         //-->
      </script>
</html>