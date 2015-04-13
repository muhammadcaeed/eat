<?php include 'header.php'; include 'config.php'; ?>
<div style="position: absolute; left:50px; top:260px;" class="thumbnail">
    <img src="images/kfc/kfc.png" width="180">
</div>
<div style="margin-top:-20px; height: 400px;">
        <img src="images/kfc/cover.jpg" width="100%" height="300">
    </div>
<div class="container-fluid">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Restaurants</a></li>
            <li class="active">
                <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $qry="SELECT * FROM restaurant where id ='" .  $id . "'";
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
                }
                ?>
            </li>

        </ol>

    <div class="row">
        <div class="col-md-2">.col-md-2</div>
        <div class="col-md-7">
            <img src="images/kfc/cover.jpg" width="100%" height="200px">

    <?php
    $query = "SELECT category.cat_name, category.cover, category.id, item.cat_id, item.item_name, item.price, item.description
              FROM category, item
              WHERE category.id =  item.cat_id";

    $result = mysql_query($query) or die(mysql_error());


    while($row = mysql_fetch_array($result)){ ?>
        <h3 style=line-height: 0;><?php echo $row['cat_name']; ?></h3>
            <table class="table">

                <tr>
                    <td class="col-md-3">
                        <span><p class="btn-sm btn-info"><?php echo $row['item_name']; ?></p><?php echo $row['description']; ?> </span>
                    </td>
                    <td class="col-md-2 text-center">
                        <span class="btn-sm btn-primary"><?php echo $row['price']; ?></span></td>
                    <td class="col-md-1 text-center">

                        <button class="btn-xs btn-danger">Add</button>
                    </td>
                </tr>
                </table>
     <?php   }    ?>

            </div>
            <div class="col-md-3">.col-md-3</div>
        </div>
</div>
<?php include 'footer.php' ?>