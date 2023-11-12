<?php
include "extra/connection.php";
$id=$_GET['id'];
$abc=$_GET['abc'];
$xyz=$_GET['xyz'];
if($id){
$result=mysqli_query($connect,"DELETE FROM apply where id='$id'");
if($result){
    header("location: apply_data_table.php");
    echo "<script>alert('Data seccessfully deleted')</script>";
}
}
elseif($abc){
    $result=mysqli_query($connect,"DELETE FROM contact_timing where id='$abc'");
if($result){
    header("location: contact_timing.php");
    echo "<script>alert('Data seccessfully deleted')</script>";
}
}
elseif($xyz){
    $result=mysqli_query($connect,"DELETE FROM services where id='$xyz'");
if($result){
    header("location: services_form.php");
    echo "<script>alert('Data seccessfully deleted')</script>";
}
}
?>