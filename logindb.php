<?php

session_start();

$sl=$_REQUEST['sl'];
$serverName='localhost';
$userName='root';
$password='';
$database='Project';
$connection=new mysqli($serverName,$userName,$password,$database);

if (isset($_POST['customername']) && isset($_POST['password'])) {

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $customername = validate($_POST['customername']);

    $password = validate($_POST['password']);

    if (empty($customername)) {

        echo "Required Customer Name!";

    }else if(empty($password)){

        echo "Required Password!";
    }else{

        $sql = "SELECT * FROM signup WHERE customername='$customername' AND password='$password'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['customername'] === $customername && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['customername'] = $row['customername'];
                $_SESSION['mobile'] = $row['mobile'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['members'] = $row['members'];
                $_SESSION['dateofBirth'] = $row['dateofBirth'];
                $_SESSION['picture'] = $row['picture'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['postalcode'] = $row['postalcode'];
                echo "<script> location.href='http://localhost/xampp/hatar/house.php'; </script>";

            }else{
                echo"Wrong Information";

                echo "<script> location.href='http://localhost/xampp/hatar/login.php'; </script>";

            }

        }else{
            echo"Wrong Information";

            echo "<script> location.href='http://localhost/xampp/hatar/login.php'; </script>";

        }

    }

}
