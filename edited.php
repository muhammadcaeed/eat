<?php
if(isset($_GET['ed']))
{
    include 'config.php';
}
$id=$_GET['ed'];
$name=$_POST['item_name'];
$price=$_POST['item_price'];
$desc=$_POST['item_description'];
$cat_id=$_POST['cat_id'];
echo $id . "<br/>" . $name . "<br/>" . $price . "<br/>" . $desc . "<br/>" . $cat_id;
if($price <= 0)
    header("location:adminpanel.php?ederror=$id");
else {
    $strqry = "UPDATE item SET cat_id = '$cat_id', item_name = '$name', price = '$price', description = '$desc' WHERE id = '" . $id . "' ";
    mysql_query($strqry);
    header('location:adminpanel.php?ed=edit');
}
?>