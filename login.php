<?php
session_start();
if(isset($_SESSION["una"]))
{
    if(isset($_SESSION["pas"]))
    {
        header('location:adminpanel.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" href="css/style.css" media="all" />
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container middle">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" role="form" method="post" action="verify.php">
                <fieldset>
                    <legend>Admin Panel</legend>

                    <div class="form-group">
                        <label for="user" class="col-lg-2 control-label">Username</label>

                        <div class="col-lg-10">
                            <input id="user" name="user"  class="form-control" name="user" placeholder="user" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass" class="col-lg-2 control-label">Password</label>

                        <div class="col-lg-10">
                            <input id="pass" name="pass" type="password" name="pass" class="form-control" placeholder="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-primary btn-block" type="submit" name="btnSubmit">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <?php
    if(isset($_GET['id'])){ ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            Enter valid information!
        </div>
    <?php } ?>
</div>
</body>
</html>