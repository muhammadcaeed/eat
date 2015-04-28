<?php include 'header.php'; include 'config.php'; ?>
<div class="container-fluid">
    <ol class="breadcrumb" style="margin-top:20px;">
        <li><a href="#">Home</a></li>
        <li class="active">Restaurants</li>

    </ol>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item disabled">
                    Cuisines
                </a>
                <a href="#" class="list-group-item">Cuisines 1</a>
                <a href="#" class="list-group-item">Cuisines 2</a>
                <a href="#" class="list-group-item">Cuisines 3</a>
                <a href="#" class="list-group-item">Cuisines 4</a>
                <a href="#" class="list-group-item">Cuisines 5</a>
            </div>
        </div>
        <div class="col-md-9">
<?php
    $qry = "SELECT * FROM restaurant";
    $data = mysql_query($qry);
    if(!$data)
    {
        die("Error: " . mysql_error());
    }
    else
    {
        while($row = mysql_fetch_array($data))
        { ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <img src="<?php echo $row['thumbnail']; ?>" class="img-thumbnail" width="160" height="160" >
                    </div>
                    <div>
                        <div id="res" class="pull-left">
                            <ul>
                                <li><h3><?php echo $row['res_name']; ?></h3></li>
                                <li><i><u>Meal</u></i><br><span class="glyphicon glyphicon-cutlery"></span><strong> <?php echo $row['type']; ?></strong></li>
                                <li><i><u>Address</u></i><br><span class="glyphicon glyphicon-home"></span><strong> <?php echo $row['address']; ?></strong></li>
                            </ul>
                        </div>
                        <div class="pull-right" id="res_options">
                            <ul>
                                <li>
                                    <div class="btn-group-xs">
                                        <span class="btn btn-default"><img src="images/delivery.png" width="20" height="20"></span><span class="btn btn-danger">Delievery</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="btn-group-xs">
                                        <span class="btn btn-default"><img src="images/dine_in.png" width="20" height="20"></span><span class="btn btn-info">Dine-in</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="btn-group-xs">
                                        <span class="btn btn-default"><img src="images/take_away.png" width="20" height="20"></span><span class="btn btn-primary">Take Away</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="btn-group-sm">
                                        <a href="items.php?id=<?php echo $row['id']; ?>&cc=refresh"><span class="btn btn-success">ORDER NOW</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<?php }
    }
?>


        </div>
    </div>
</div>


<?php include 'footer.php' ?>