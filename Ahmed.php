<html>
<head>
    <title>
        Payment
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
</head>
<body bgcolor="green">
<center>
    <img src="A2.jpeg" alt="Picture one" style="width:200px;height:90px;">
    <img src="wela.JPG" alt="Picture two" style="width:900px;height:90px;">
    <img src="A3.jpeg" alt="Picture three" style="width:200px;height:90px;">
</center>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;">PAYMENT FOR RENTAL CONFIRMATION</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <iframe name="votar" style="display:none;"></iframe>
                        <form action="Payment(Ahmed).php" method="post" target="votar">
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
                                            Payment for confirmation(5000TK)
                                        </td>
                                        <td>
                                            <input required class="form-control" name="payment" id="payment" value="5000" placeholder="Enter payment for confirmation">
                                        </td>
<td>
                                            <img height="40" width="50" src="taka.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            House owner bkash number(0181567894)
                                        </td>
                                        <td>
                                            <input required class="form-control" name="bkash" id="bkash" value="0181567894" placeholder="Enter the house owner bkash number">
                                        </td>
<td>
                                            <img height="40" width="50" src="bkash.jpg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input onclick="window.open('saveahmed.php')" class="btn btn-priamary" name="submitButton" type="submit" value="CONFIRM RENT">
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
</body>
</html>