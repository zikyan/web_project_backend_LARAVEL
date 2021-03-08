<?php

$db=mysqli_connect('localhost', 'root', '', 'products');
if(isset($_POST['delete_btn']))
{
    $delete_id=$_POST['delete_id'];
    $query="delete from single where id='$delete_id' ";
    $result=mysqli_query($db,$query);

    header('location:dashboard.php');
}




?>