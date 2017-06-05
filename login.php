<?php
    session_start();
    if(isset($_SESSION['uname']))
    header('location:user.php');
?>
<html>
<head>
    <title>form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="image/logo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <script>
    </script>
</head>

<body>
    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                 </button>
                <a class="navbar-brand" href="#"><b>BIB<font color="red">ESHA</font></b></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-12 parallaxA">
        <form method="POST" action="check.php">
            <div class="container">
                <div class="col-md-4"></div>
                <div class="height col-md-4">

                    <section class="jumbotron">
                        <div class="img"></div>
                        <fieldset>
                            <legend>
                                Log
                                <font color="red"> In</font>
                            </legend>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="uname" placeholder="*username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="pwd" id="fullName" placeholder="*Password" class="form-control" required>
                            </div>

                            <input type="hidden" name="hidden" value="hidden">

                            <input type="submit" class="btn btn-success" value="Submit">

                        </fieldset>
                    </section>
                    <button type="submit" value="logout"/>
                    <div class="col-md-4"></div>
                </div>
            </div>
    </div>

    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/form1.js"></script>


    </script>
    </form>

</body>

</html>