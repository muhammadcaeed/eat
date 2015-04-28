<?php include 'admin_header.php'; include 'admin_nav.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php
            if(isset($_GET['ed'])) {
                $id = $_GET['ed']; ?>
            <form class="form-horizontal" role="form" method="post" action="edited.php?ed=<?php echo $id; ?>">
                <fieldset>
                    <legend>Edit Item</legend>
                        <?php
                        $query = "SELECT * FROM item WHERE id ='" . $id . "'";
                        $result = mysql_query($query) or die(mysql_error());
                        while ($row = mysql_fetch_array($result)) {  ?>
                            <div class="form-group">
                                <label for="item_name" class="col-lg-2 control-label">Item Name</label>
                                <div class="col-lg-10">
                                    <input id="item_name" type="text" class="form-control" name="item_name" value="<?php echo $row['item_name']; ?>" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="item_price" class="col-lg-2 control-label">Item Price</label>
                                <div class="col-lg-10">
                                    <input id="item_price" type="text" class="form-control" name="item_price" value="<?php echo $row['price']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="item_description" class="col-lg-2 control-label">Item Description</label>
                                <div class="col-lg-10">
                                    <textarea id="item_description" class="form-control" name="item_description" required><?php echo $row['description']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category_name" class="col-lg-2 control-label">Category ID</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="cat_id">
                                        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_id']; ?></option>
                                        <?php
                                        $strqry = "SELECT id FROM category";
                                        $data = mysql_query($strqry) or die(mysql_error());
                                        while($row2 = mysql_fetch_array($data)){
                                            if($row['cat_id'] != $row2['id'])
                                            { ?>
                                                <option value="<?php echo $row2['id']; ?>"><?php echo $row2['id']; ?></option>
                                      <?php  } }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-primary btn-block" type="submit" name="btnSubmit">Submit</button>
                                </div>
                            </div>
                <?php } } ?>
                </fieldset>
            </form>
        </div>
    </div>
</div>