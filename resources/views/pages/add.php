<?php
$db=mysqli_connect("localhost", "root", "", "products") or die('Cannot connect to database');
if(isset($_POST['registerbtn']))
{
    $proname=$_POST['proname'];
    $proprice=$_POST['proprice'];
    $prostock=$_POST['prostock'];
    $procode=$_POST['procode'];
    $prodis=$_POST['prodis'];
    $proavail=$_POST['proavail'];
    $promat=$_POST['promat'];
    $prosize=$_POST['prosize'];
    $prospecs=$_POST['prospecs'];


    if(isset($_FILES['propic']))
    {
        $propic=$_FILES['propic']['tmp_name'];
        move_uploaded_file($propic,"images/".$_FILES['propic']['name']);
    }

    $query="insert into single (proname, propic, proprice, prostock, procode, prodis, proavail,promat , prosize, prospecs) values ('$proname', '$propic', '$proprice', '$prostock', '$procode', '$prodis', '$proavail', '$promat', '$prosize', '$prospecs')";
    $result=mysqli_query($db,$query);

    if($result)
    {
        header('location:dashboard.php');
    }
    else
    {
        header('location:dashboard.php');
    }
}

?>