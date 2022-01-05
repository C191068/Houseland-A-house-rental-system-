<html>
<head>
    <title>
        UPDATE
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/jquery-ui-themes-1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
    <style>
        .scrolling-wrapper {
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;

        .card {
            display: inline-block;
        }
        }
    </style>
<style>
        body {
            background: linear-gradient(90deg, rgba(177, 64, 200, 1) 0%,
            rgba(109, 9, 121, 1) 35%, rgba(45, 1, 62, 1) 100%);
        }
        .glow {
            font-size: 70px;
            color: #ffffff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }
        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #eeeeee, 0 0 20px #000000, 0 0 30px #000000, 0 0 40px #000000,
                0 0 50px #9554b3, 0 0 60px #9554b3, 0 0 70px #9554b3;
            }
            to {
                text-shadow: 0 0 20px #eeeeee, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6,
                0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }
    </style>
</head>
<body bgcolor="green">

<center>
    <h1 class="glow">HOUSELAND<br>A HOUSE RENTAL SYSTEM</h1>
</center>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;">UPDATE HERE</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <?php
                        $sl=$_REQUEST['sl'];
                        $serverName='localhost';
                        $userName='root';
                        $password='';
                        $database='Project';
                        $connection=new mysqli($serverName,$userName,$password,$database);
                        $edit_query="SELECT * FROM signup WHERE sl='$sl'";
                        $result=mysqli_query($connection,$edit_query);
                        $row=mysqli_fetch_array($result);
                        ?>

                        <center>
                            <form action="edit.php" method="post">
                      
                                <input sl="sl" type="hidden" name="sl" value="<?php echo $row[0]?>">

                                <table>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td><input required class="form-control" type="text" name="customername" value="<?php echo $row['customername'] ?>" placeholder="Enter your name"></td>
                                        <td>
                                            <img height="40" width="50" src="user.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Customer mobile number</td>
                                        <td><input required class="form-control" type="text" name="mobile" value="<?php echo $row['mobile'] ?>" placeholder="Enter your number"></td>
                                        <td>
                                            <img height="40" width="50" src="mobile.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input required class="form-control" type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter your email"></td>
                                        <td>
                                            <img height="40" width="50" src="gmailicon.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input required class="form-control" type="password" name="password" value="<?php echo $row['password'] ?>" placeholder="Enter your password"></td>
                                        <td>
                                            <img height="40" width="50" src="password.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><select required class="form-control" name="gender" value="<?php echo $row['gender'] ?>">
                                                <option>MALE</option>
                                                <option>FEMALE</option>
                                            </select>
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="gender.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Number of members(including you)</td>
                                        <td><select required class="form-control" name="members" value="<?php echo $row['members'] ?>">
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                            </select>
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="members.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><input required class="form-control datepicker" type="text" name="dateofBirth" value="<?php echo $row['dateofBirth'] ?>" placeholder="Enter your birth date"></td>
                                        <td>
                                            <img height="40" width="50" src="birthday.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Profile photo</td>
                                        <td><input required class="form-control" type="file" name="picture" value="<?php echo $row['picture'] ?>"></td>
                                        <td>
                                            <img height="40" width="50" src="profile.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td><input required class="form-control" type="text" name="address" value="<?php echo $row['address'] ?>" placeholder="Enter your address"></td>
                                        <td>
                                            <img height="40" width="50" src="location.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Postal code</td>
                                        <td><input required class="form-control" type="text" name="postalcode" value="<?php echo $row['postalcode'] ?>" placeholder="Enter your postal code"></td>
                                        <td>
                                            <img height="40" width="50" src="postal.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input class="btn btn-priamary" type="submit" name="UPDATE" value="UPDATE">
                                        </td>
                                    </tr>

                                </table>

                            </form>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<center>
    <img src="flag.png" alt="Picture two" style="width:100%;height:100px;">
</center>
<footer>
    <img class src="A5.jpeg" alt="Picture four" style="width:30%;height:200px;">
    <img class src="A6.jpeg" alt="Picture five" style="width:35%;height:200px;">
    <img class src="A7.jpeg" alt="Picture six" style="width:34%;height:200px;">
</footer>
<script>
    $(function() {
        $( "#dateofBirth" ).datepicker();
    });
</script>
</body>
</html>