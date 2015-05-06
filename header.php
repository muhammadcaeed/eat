<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eat Where You Need</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/typeahead.js"></script>
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
</head>
<body>


<!--
<nav class="navbar navbar-default ">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Eat Where You Need!</a>
        </div>


        <ul class="nav navbar-nav navbar-right">
            <li><a href="restaurants.php">Restaurants</a></li>
            <li><a href="login.php">Admin Panel</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Dropdown<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>

                </ul>
            </li>
        </ul>
    </div>
    </div>
</nav>
-->
<div id="navbar">
    <div id="navbarWorkspace" class="col-md-3">
        <a href="index.php"><img src="images/new-logo.png"></a>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <h2 style="font-family: bon;">Order food delivery in Karachi!</h2>
    </div>
    <div class="col-md-2 col-md-offset-1" style="margin-top:20px;">
        <a href="#" data-toggle="modal" data-target="#myModal"><span class="btn btn-block btn-info">Restaurant Panel</span></a>
    </div>
</div>
<div id="navbarBorder">

</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 900px;">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Restaurant Panel</h4>
            </div>
           <div style="min-height: 600px;">
               <div class="col-md-5">
                   <form class="form-horizontal" role="form" method="post" action="verify.php">
                       <fieldset>
                           <legend>Signup</legend>
                           <div class="form-group">
                               <label for="user" class="col-lg-2 control-label">Name</label>

                               <div class="col-lg-10">
                                   <input id="user" type="text" class="form-control" name="name" placeholder="Restaurant Manager's Name" required autofocus>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="phone" class="col-lg-2 control-label">Mobile No.</label>

                               <div class="col-lg-10">
                                   <input id="phone" type="tel" name="phone" pattern="[+]{1}[9]{1}[2]{1}[3]{1}[0-9]{9}" class="form-control" placeholder="+923XXXXXXXXX" required>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="address" class="col-lg-2 control-label">Address</label>

                               <div class="col-lg-10">
                                   <input id="address" type="text" class="form-control" name="address" placeholder="Complete address of your restaurant" required autofocus>
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="user" class="col-lg-2 control-label">Username</label>

                               <div class="col-lg-10">
                                   <input id="user" type="text" class="form-control" name="user" placeholder="Your username must be unique" required autofocus>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="email" class="col-lg-2 control-label">E-mail</label>

                               <div class="col-lg-10">
                                   <input id="email" type="email" name="email" class="form-control" placeholder="somebody@xyz.com" required autofocus>
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="pass" class="col-lg-2 control-label">Password</label>

                               <div class="col-lg-10">
                                   <input id="pass" name="pass" type="password" class="form-control" placeholder="Make sure you enter a strong combination" required>
                               </div>
                           </div>

                           <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                   <button class="btn btn-primary btn-block" type="submit" name="signup">Submit</button>
                               </div>
                           </div>
                       </fieldset>
                   </form>
               </div>

               <div class="col-md-5 col-md-offset-1">
                   <form class="form-horizontal" role="form" method="post" action="verify.php">
                       <fieldset>
                           <legend>Login</legend>

                           <div class="form-group">
                               <label for="user" class="col-lg-2 control-label">Username</label>

                               <div class="col-lg-10">
                                   <input id="user" name="user"  class="form-control" placeholder="Username" required autofocus>
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="pass" class="col-lg-2 control-label">Password</label>

                               <div class="col-lg-10">
                                   <input id="pass" name="pass" type="password" class="form-control" placeholder="Password" required>
                               </div>
                           </div>

                           <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                   <button class="btn btn-primary btn-block" type="submit" name="login">Submit</button>
                               </div>
                           </div>
                       </fieldset>
                   </form>
               </div>
           </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="videos.php"><button type="button" class="btn btn-primary">All Videos</button></a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<?php
include 'config.php';
if(isset($_POST['login']))
{

    if(isset($_POST['user']))
    {
        if(isset($_POST['pass']))
        {
            $un=$_POST['user'];
            $pa=$_POST['pass'];

            //$strqry="select * from adminpanel where user='".$un."' and pass='".$pa."'";
            $strqry="SELECT * FROM login WHERE user='".$un."' AND pass='".$pa."'";
            $data=mysql_query($strqry);
            $b=mysql_num_rows($data);
            if($b>0)
            {
                session_start();
                $_SESSION['una']=$un;
                $_SESSION['pas']=$pa;
                header('location:adminpanel.php');
            }
            else
            {
                header('location:index.php?err=Wrong Username or Password');
            }
        }
    }
}

?>
