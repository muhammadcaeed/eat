<?php include 'header.php'; include 'config.php'; ?>
<?php if(isset($_GET['msg'])) {
    ?>
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Congratulations!</strong> Your order has been placed successfully!
    </div>
<?php } ?>
<div id="search">
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
            <div class="row" style="height: 60px;">
                <div id="searchText" class="col-md-4" style="margin-left: 50px;">
                    <button type="button" class="btn btn-block btn-lg btn-danger" disabled>Search Your Restaurant</button>
                </div>
                <div class="col-md-7">
                    <div>
                        <form class="form-inline" method="GET" action="index.php" role="search">
                            <div class="form-group">
                                <input type="text" name="res_name" style="width: 506px;" class="form-control res_name" placeholder="Search">
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary move-left"><span class="glyphicon glyphicon-search"></span></button>
                        </form>

                        <script>
                            $(document).ready(function() {

                                $('input.res_name').typeahead({
                                    name: 'res_name',
                                    remote : 'res_name.php?query=%QUERY'
                                });
                            })
                        </script>

                        <?php
                        if(isset($_GET['submit']))
                        {
                            $res_name = $_GET['res_name'];
                            $qry = "SELECT id from restaurant WHERE res_name = '". $res_name . "'";
                            $result = mysql_query($qry) or die(mysql_error());
                            $row = mysql_fetch_array($result);
                            $row_id = $row['id'];
                            header("location:items.php?id=$row_id");
                        }
                        ?>

                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
            <div class="row col-md-7 col-md-offset-2">
                <a href="restaurants.php"><span style="text-decoration: none;" disabled class="btn btn-block btn-lg btn-primary">View All Restaurants</span></a>
            </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h1>Deals</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="images/featured.jpg" alt="...">
                        <div class="caption">
                            <h4>Deal 1</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="images/featured.jpg" alt="...">
                        <div class="caption">
                            <h4>Deal 1</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="images/featured.jpg" alt="...">
                        <div class="caption">
                            <h4>Deal 1</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="page-header">
                <h1>Orders</h1>
            </div>
            <div class="list-group">

                <?php

                $rresult = mysql_query("SELECT * FROM orders");
                $num_rows = mysql_num_rows($rresult);
                ?>

                <?php
                $oqry = "SELECT *
                   FROM orders
                   ORDER BY id DESC
                   LIMIT 4";
                $orslt = mysql_query($oqry) or die(mysql_error());
                while($orow = mysql_fetch_array($orslt)) {
                    $oname = $orow['name'];
                    $otime = $orow['time'];
                    $odate = $orow['date'];
                    $res_name = $orow['res_name'];

                    if($oname != 'temp') {
                        ?>

                        <a href="#" class="list-group-item">
                            An order to <?php echo $res_name; ?> restaurant was placed by <?php echo $oname; ?>
                            at <?php echo $otime; ?>
                            <h4 class="list-group-item-heading"><span
                                    class="glyphicon glyphicon-user"></span> <?php echo $oname; ?></h4>

                            <p class="list-group-item-text"><span class="text-left"><span
                                        class="glyphicon glyphicon-dashboard"></span> <?php echo $otime; ?></span><span
                                    class="pull-right"><span
                                        class="glyphicon glyphicon-calendar"></span> <?php echo $otime; ?></span></p>
                        </a>
                    <?php
                    } }
                ?>
            </div>
        </div>
    </div>
    <div>
        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Top Food Delivery and Restaurant Reservation in Karachi</h4>
                <p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.</p>
                <p>To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.</p>
                 <p>The process is simple:
                    <ul>
                        <li>Select your area.</li>
                        <li>Pick the restaurant and order using our interactive menus.</li>
                        <li> Sit back and wait for the food to be delivered.</li>
                    </ul>
                 </p>
                 <p>Yes! It is that easy.</p>
                 <p>With EatOye, you can order food online, call our UAN (111-HUNGRY) without leaving your couch at home or your desk at work. EatOye is indeed the smartest way to order food. EatOye comprises of passionate individuals (you might know them from www.fcpakistan.com) dedicated to making dining in or out a breeze. The company is headquartered in Karachi, Pakistan with staff in Lahore and Islamabad. Now your food is definitely, one click away!</p>

            </div>
        </div>

    </div>

    <div>
        <div class="page-header">
        <h1>Our Restaurants</h1>
    </div>
        <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/featured.jpg" width="210">
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/featured.jpg" width="210">
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/featured.jpg" width="210">
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/featured.jpg" width="210">
            </div>
        </div>
    </div>
    </div>
</div>


<!-- Start WOWSlider.com BODY section
<div id="wowslider-container1">
    <div class="ws_images"><ul>
            <li><a href="http://wowslider.com/vi"><img src="data1/images/1.jpg" alt="responsive slider" title="1" id="wows1_0"/></a></li>
            <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li>
        </ul></div>
    <div class="ws_bullets"><div>
            <a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>1</span></a>
            <a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>2</span></a>
        </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">html slideshow</a></div>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<?php include 'footer.php' ?>