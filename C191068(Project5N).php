<html>
<head>
    <title>
        Sign up
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
                        <h1 style="color:red;font-size:40px;">SIGN UP HERE</h1>
                    </center>
                </div>
                <center>
                    <div class="row">
                        <div class="column">
                            <a href="login.php"><button><img height="50" width="50" src="icon.jpeg">SIGN IN</button></a>
                        </div>
                    </div>
                </center>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <iframe name="votar" style="display:none;"></iframe>
                        <form action="insert(2).php" method="post" target="votar">
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            Customer Name
                                        </td>
                                        <td>
                                            <input required class="form-control" name="customername" id="customername" placeholder="Enter your name">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="user.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Customer mobile number
                                        </td>
                                        <td>
                                            <input required class="form-control" name="mobile" id="mobile" placeholder="Enter your Number ">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="mobile.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            <input required class="form-control" name="email" id="email" type="email" placeholder="Enter your email">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="gmailicon.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            <input required class="form-control" name="password" id="password" type="password" placeholder="Enter your password">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="password.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Gender
                                        </td>
                                        <td>
                                            <select required class="form-control" name="gender" id="gender">
                                                <option>MALE</option>
                                                <option>FEMALE</option>
                                            </select>
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="gender.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Number of members(including you)
                                        </td>
                                        <td>
                                            <select required class="form-control" name="members" id="members">
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
                                        <td>
                                            Date of Birth
                                        </td>
                                        <td>
                                            <input required class="form-control datepicker" name="dateofBirth" id="dateofBirth" type="text" placeholder="Enter your birthdate">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="birthday.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Profile photo
                                        </td>
                                        <td>
                                            <input required class="form-control" name="picture" id="picture" type="file">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="profile.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Address
                                        </td>
                                        <td>
                                            <input required class="form-control" name="address" id="address" placeholder="Enter your address">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="location.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Postal code
                                        </td>
                                        <td>
                                            <input required class="form-control" name="postalcode" id="postalcode" placeholder="Enter your postal code">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="postal.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input onclick=" window.open('SAVE.php')" class="btn btn-priamary" name="submitButton" type="submit" value="SUBMIT">
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </form>
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