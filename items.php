<?php include 'header.php'; include 'config.php'; ?>


<?php
if(isset($_GET['id'])) {
    $res_id = $_GET['id'];
    $vqry = "SELECT * from restaurant WHERE id = '" . $res_id . "'";
    $vrslt = mysql_query($vqry) or die(mysql_error());
    while($vrow = mysql_fetch_array($vrslt))
    {
        $res_name = $vrow['res_name'];
        $add = $vrow['address'];
        $thumb = $vrow['thumbnail'];
        $cover = $vrow['cover'];
        $type = $vrow['type'];
    }
}

else {
    header('location:/eat/');
}

if(isset($_GET['submit']))
{
    $order_name = $_GET['fname'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    date_default_timezone_set("Asia/Karachi");
    $dt1=date("Y-m-d");
    $dt2=date("H:i:s");
    $atquery = "UPDATE orders SET name = '$order_name', address = '$address', phone = '$phone', res_name = '$res_name', date = '$dt1', time = '$dt2' WHERE name = 'temp' ";
    mysql_query($atquery) or die(mysql_error());
    mysql_query("INSERT INTO orders (name) VALUE ('temp')");
    header("location:index.php?msg=success");
}

if(isset($_GET['itemid']))
{
    $itid = $_GET['itemid'];
    $sequery = "SELECT id from orders WHERE name = 'temp'";
    $serslt = mysql_query($sequery) or die(mysql_error());
    $serow = mysql_fetch_array($serslt);
    $order_idd = $serow['id'];
    $firstcheck = "SELECT * FROM order_item WHERE order_id ='" . $order_idd . "' AND item_id ='" . $itid . "'";
    $firstquery = mysql_query($firstcheck) or die(mysql_error());
    $row_num = mysql_num_rows($firstquery);
    if($row_num == 1) {
        $firstfetch = mysql_fetch_array($firstquery);
        $qqttyy = $firstfetch['qty'];
        $qqttyy += 1;
        $frquery = "UPDATE order_item SET qty ='$qqttyy' WHERE item_id ='" . $itid . "'";
        mysql_query($frquery) or die(mysql_error());
        header("location:?id=$res_id#order");
    }
    else {
        $itqry = "INSERT INTO order_item (order_id, item_id, qty) VALUES ('$order_idd','$itid','1')";
        mysql_query($itqry) or die(mysql_error());
        header("location:?id=$res_id#order");
    }
}
?>
<div style="position: absolute; left:50px; top:285px;" class="col-md-9">
    <div class="col-md-3 thumbnail">
        <img src="<?php echo $thumb; ?>" width="180">
    </div>
    <div class="col-md-9">
        <div style="margin-top:95px;">
            <h3><u><?php echo $res_name; ?></u></h3>
            <small><span class="glyphicon glyphicon-map-marker"></span> All Areas, Karachi  <span class="glyphicon glyphicon-cutlery"></span> <?php echo $type; ?></small>
        </div>
    </div>
</div>
<div style="height: 400px;">
        <img src="<?php echo $cover; ?>" width="100%" height="300">
    </div>
<div class="container-fluid">
        <ol class="breadcrumb" style="margin-top:-15px;">
            <li><a href="index.php">Home</a></li>
            <li><a href="restaurants.php">Restaurants</a></li>
            <li class="active">
                <?php
                    $res_id = $_GET['id'];
                    $qry="SELECT * FROM restaurant where id ='" .  $res_id . "'";
                    $data = mysql_query($qry);
                    if(!$data)
                    {
                        die("Error: " . mysql_error());
                    }
                    else {
                        while ($row = mysql_fetch_array($data)) {
                            echo $row['res_name'];
                        }
                    }
                ?>
            </li>

        </ol>


    <div class="row">
        <div class="col-md-8">
    <?php
        $query = "SELECT * FROM category WHERE res_id = '" . $res_id . "'";
        $result = mysql_query($query) or die(mysql_error());


    while($row = mysql_fetch_array($result)){
        $cov = $row['cover'];
        ?>
        <a name="<?php echo $row['cat_name']; ?>"><h3 style=line-height: 0;><?php echo $row['cat_name']; ?></h3></a>
        <table class="table">
            <img src="<?php echo $cov;  ?>" class="thumbnail" width="100%" height="200px">
            <?php
            $cat_id = $row['id'];
            $sub_query = "SELECT * FROM item WHERE cat_id = '" . $cat_id . "'";


            $subresult = mysql_query($sub_query) or die(mysql_error()); ?>

                <?php

            while($subrow = mysql_fetch_array($subresult))
            {
                $item_id = $subrow['id'];
                $item_name = $subrow['item_name'];
                $description = $subrow['description'];
                $price = $subrow['price'];
                ?>

                    <tr>
                        <td class="col-md-3">
                            <span><p class="btn-sm btn-info" ><?php echo $item_name; ?></p><?php echo $description; ?> </span>
                        </td>
                        <td class="col-md-2 text-center">
                            <span class="btn-sm btn-primary"><?php echo $price; ?></span></td>
                        <td class="col-md-1 text-center">
                           <!-- <a name="<?php echo $item_id; ?>" href="items.php?itemid=<?php echo $item_id; ?>&id=<?php echo $res_id; ?>"><button type="button" name="add" value="add" class="btn-xs btn-danger">Add</button></a> -->
                           <a href="items.php?itemid=<?php echo $item_id; ?>&id=<?php echo $res_id; ?>"><button type="button" name="add" value="add" class="btn-xs btn-danger">Add</button></a>
                        </td>
                    </tr>
          <?php } ?>
        </table>
     <?php   }    ?>

            </div>
        <div class="col-md-4">
            <div class="list-group">
                <a class="list-group-item list-group-item-info">
                    Meals
                </a>
                <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $qry="SELECT * FROM category where res_id ='" .  $id . "'";
                    $data = mysql_query($qry);
                    if(!$data)
                    {
                        die("Error: " . mysql_error());
                    }
                    else {
                        while ($row = mysql_fetch_array($data)) {
                            ?>
                            <a href="#<?php echo $row['cat_name']; ?>" class="list-group-item"><?php echo $row['cat_name']; ?></a>
                        <?php
                        }
                    }
                }
                ?>
            </div>




            <div class="list-group">
                <a name="order" class="list-group-item list-group-item-info">
                    Order Placement
                </a>
                   <span class="list-group-item">
                       <div class="input-group">
                           <span class="input-group-btn">
                               <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-map-marker"></span></button>
                           </span>
                           <input type="text" class="form-control" placeholder="Search for...">
                           <span class="input-group-btn">
                               <button class="btn btn-default" type="button">Go!</button>
                           </span>
                       </div>
                   </span>
                    <span class="list-group-item">
                        <table>
                            <tr>
                                <td style="padding-left: 13px; padding-right: 13px;"><span class="glyphicon glyphicon-time"></span> 45mins</td>
                                <td style="padding-left: 13px; padding-right: 13px;"><span class="glyphicon glyphicon-home"></span> Rs.30</td>
                                <td style="padding-left: 13px;"><span class="glyphicon glyphicon-shopping-cart"></span> Rs.300</td>
                            </tr>
                        </table>
                   </span>
                   <span class="list-group-item text-center" style="min-height: 100px;">

                       <?php
                            $sequery = "SELECT id from orders WHERE name = 'temp'";
                            $serslt = mysql_query($sequery) or die(mysql_error());
                            $serow = mysql_fetch_array($serslt);
                            $order_idd = $serow['id'];
                            $iqry = "SELECT * FROM order_item WHERE order_id ='" . $order_idd . "'";
                            $irslt = mysql_query($iqry) or die(mysql_error());
                       echo "<form name='order_now' class='form-horizontal' role='form' action='#'>";
                       echo "<table class=table>";
                       echo "<tr>";
                       echo "<th></th>";
                       echo "<th>Qty</th>";
                       echo "<th>Item Name</th>";
                       echo "<th>Price</th>";
                       echo "<th></th>";
                       echo "</tr>";
                       $total = 0;
                            while($orow = mysql_fetch_array($irslt))
                            {
                                $oqty = $orow['qty'];
                                $item_id = $orow['item_id'];
                                $order_item_id = $orow['id'];
                                $zqry = "SELECT * FROM item WHERE id ='" . $item_id . "'";
                                $zresult = mysql_query($zqry) or die(mysql_error());

                                $zrow = mysql_fetch_array($zresult);
                                $zprice = $zrow['price'];
                                $final_price = $oqty * $zprice;
                                    echo "<tr>"; ?>
                                    <td><a href="items.php?id=<?php echo $res_id; ?>&plus=<?php echo $order_item_id; ?>">+</a><a href="items.php?id=<?php echo $res_id; ?>&minus=<?php echo $order_item_id; ?>">-</a></td>
                                   <?php
                                    echo "<td>" . $oqty . "</td>";
                                    echo "<td>" . $zrow['item_name'] . "</td>";
                                    echo "<td>" . $final_price . "</td>"; ?>
                                    <td><a href="items.php?id=<?php echo $res_id; ?>&del=<?php echo $order_item_id; ?>" class="glyphicon glyphicon-remove"></a></td>
                                   <?php echo "</tr>";
                                    $total += $final_price;
                            }
                       echo "</table>";

                        //}

                       //else
                       //{
                       ?>
                        <!-- <h4>Start Placing Your Order!</h4> -->
                      <?php
                      // }
                       ?>

                   </span>
                   <span class="list-group-item text-right">
                       <span>Total : Rs.<?php echo $total; ?></span>
                   </span>
                <span class="list-group-item list-group-item-danger text-center">
                    <a href="items.php?id=<?php echo $res_id; ?>&del=fullempty">Empty Cart</a>
                    <a href="#" data-toggle="modal" data-target="#myModal">Order Now</a>
                </span>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Order Placement</h4>
                            </div>
                            <div class="modal-body" style="min-height: 300px;">
                                <!--
                                <div class="form-group">
                                    <label for="inputName3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fname" id="inputName3" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress3" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAddress3" name="address" placeholder="House No.. Block ..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone3" class="col-sm-2 control-label">Phone No</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPhone3" name="phone" placeholder="+923xxxxxxxxx">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php //echo $res_id ?>">;
                                -->

                                <div class="col-md-6 col-md-offset-3">
                                    <form class="form-horizontal" role="form" method="post" action="verify.php">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="user" class="col-lg-2 control-label">Name</label>

                                                <div class="col-lg-10">
                                                    <input id="user" name="user" type="text"  class="form-control" name="user" placeholder="Full Name" required autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="add" class="col-lg-2 control-label">Address</label>

                                                <div class="col-lg-10">
                                                    <input id="add" name="add" type="text" name="add" class="form-control" placeholder="Complete Address" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="numb" class="col-lg-2 control-label">Mobile Number</label>

                                                <div class="col-lg-10">
                                                    <input id="numb" name="numb" type="tel" pattern="[9][2][3]{12}" name="numb" class="form-control" placeholder="923XXXXXXXXX" maxlength="12" required>
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
                            <div class="modal-footer">

                                <button class="btn btn-primary btn-block" type="submit" name="Submit">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Modal -->



                </form>
            </div>



        </div>
    </div>
</div>

<?php
if(isset($_GET['del'])) {
    $del = $_GET['del'];
    if($del == "fullempty") {
        $delete = "DELETE FROM order_item WHERE order_id = '" . $order_idd . "'";
        mysql_query($delete) or die(mysql_error());
        header("location:items.php?id=$res_id");
    }
    else {
        $delete = "DELETE FROM order_item WHERE id = '" . $del . "'";
        mysql_query($delete) or die(mysql_error());
        header("location:items.php?id=$res_id");
    }
}

if(isset($_GET['minus'])) {
    $minus = $_GET['minus'];
    $select = "SELECT * FROM order_item WHERE id ='" . $minus . "'";
        $selrslt = mysql_query($select) or die(mysql_error());
        $selrow = mysql_fetch_array($selrslt);
        $qty = $selrow['qty'];
    if($qty>1) {
        $qty -= 1;
        $sinsert = "UPDATE order_item SET qty = '$qty' WHERE id ='" . $minus . "'";
        mysql_query($sinsert) or die(mysql_error());
        header("location:items.php?id=$res_id");
        }
}

if(isset($_GET['plus'])) {
    $plus = $_GET['plus'];
    $select = "SELECT * FROM order_item WHERE id ='" . $plus . "'";
    $selrslt = mysql_query($select) or die(mysql_error());
    $selrow = mysql_fetch_array($selrslt);
    $qty = $selrow['qty'];
        $qty += 1;
        $sinsert = "UPDATE order_item SET qty = '$qty' WHERE id ='" . $plus . "'";
        mysql_query($sinsert) or die(mysql_error());
        header("location:items.php?id=$res_id");

}
include 'footer.php' ?>