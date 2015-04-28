<?php include 'admin_header.php'; include 'admin_nav.php';
    $user = $_SESSION["una"];
    $sqry = "SELECT * FROM login WHERE user = '". $user ."'";
    $rslt = mysql_query($sqry) or die(mysql_error());
    $u = mysql_fetch_array($rslt);
    $uid = $u['id'];
    $ssqry = "SELECT * FROM restaurant WHERE login_id = '". $uid ."'";
    $rsslt = mysql_query($ssqry) or die(mysql_error());
    $r = mysql_fetch_array($rsslt);
    $rid = $r['id'];
?>
<div class="container">
    <?php
    if(isset($_GET['id'])){ ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Item Deleted Successfully!
        </div>
    <?php } ?>
    <?php
    if(isset($_GET['ed'])){ ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Item Updated Successfully!
        </div>
    <?php } ?>
    <?php
    if(isset($_GET['ederror'])){ ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            Error: Price Must Be Greater Than 0
        </div>
    <?php } ?>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Category</div>
        <?php
        $finalqry = "SELECT * FROM category WHERE res_id = '". $rid . "'";
        $finalresult = mysql_query($finalqry) or die(mysql_error()); ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Cover</th>
                <th>Options</th>
            </tr>

            <?php
            $x=0;
            $finalid = array();
            while($finalrow = mysql_fetch_array($finalresult)){

                $finalid[$x] = $finalrow['id'];
                $x++;
                ?>

                <tr>
                    <td><?php echo $finalrow['id']; ?></td>
                    <td><?php echo $finalrow['cat_name']; ?></td>
                    <td><img src="<?php echo $finalrow['cover']; ?>" width="50" height="50" ></td>
                    <td><a href="edit.php?ed=<?php echo $finalrow['id']; ?>"><button class="btn btn-xs btn-primary">EDIT</button></a>&nbsp;<a href="delete.php?de=<?php echo $finalrow['id']; ?>"><button class="btn btn-xs btn-danger">DELETE</button></a></td>
                </tr>

            <?php }  ?>
        </table>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Meals</div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Options</th>
            </tr>
        <?php
        //$query = "SELECT category.cat_name, category.cover, category.id, item.id, item.cat_id, item.item_name, item.price, item.description
         //     FROM category, item
           //   WHERE category.id =  item.cat_id";

        $count = count($finalid);
        for($y=0; $y<$count; $y++)
        {

            $qquery = "SELECT * FROM item WHERE cat_id = '". $finalid[$y] . "'";
            $result = mysql_query($qquery) or die(mysql_error());
            while($row = mysql_fetch_array($result) ){ ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><a href="edit.php?ed=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-primary">EDIT</button></a>&nbsp;<a href="delete.php?de=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-danger">DELETE</button></a></td>
                </tr>

            <?php }    }  ?>
        </table>
    </div>
</div>
</body>