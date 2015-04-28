<?php
if(isset($_GET['de']))
{
    include 'config.php';
    $a=$_GET['de'];
    $strqry="delete from item where id='".$a."'";
    mysql_query($strqry);
    header('location:adminpanel.php?id=delete');
}
?>