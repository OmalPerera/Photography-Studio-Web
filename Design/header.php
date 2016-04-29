<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Case</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/my.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>

        <link  href="js/bootstrap-datepicker.js">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/bootstrap.css">


    </head>
    <body>

        <nav class="navbar navbar-inverse  navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Red <code>Eye</code></a>      
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>

                        <li><a href="packages.php">Packages</a></li>

                        <!-- ************** only registered customers will be able to register their wedding ************* -->
                        <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo "<li><a href='details.php'>Reservations</a></li>";
                            }else{   
                            }    
                        ?>
                        <li><a href="payment.php">Payment</a></li>

                        <!--li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Other <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Employee Details</a></li>
                                <li><a href="#">Admin Panel</a></li>
                                <li><a href="#">Help</a></li>

                            </ul>
                        </li-->

                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                $username = $_SESSION['name'];
                                echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout (".$username.")</a></li>";
                            }else{
                                echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                                echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                            }    
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
