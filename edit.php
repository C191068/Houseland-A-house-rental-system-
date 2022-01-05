<?php
$sl=$_REQUEST['sl'];
$serverName='localhost';
$userName='root';
$password='';
$database='Project';
$connection=new mysqli($serverName,$userName,$password,$database);
$customername=$_POST['customername'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$members=$_POST['members'];
$dateofBirth=$_POST['dateofBirth'];
$picture=$_POST['picture'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$postalcode=$_POST['postalcode'];
$update_query="UPDATE signup set customername='$customername',mobile='$mobile',gender='$gender',members='$members',dateofBirth='$dateofBirth',picture='$picture',email='$email',password='$password',address='$address',postalcode='$postalcode' WHERE sl='$sl' ";
$result=mysqli_query($connection,$update_query);
if($result)
{
    echo"Updated Successfully";
} else
{
    echo"Fail to Update";
}
echo "<script> location.href='http://localhost/xampp/hatar/insert(2).php'; </script>";