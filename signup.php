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
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-12 parallax">
        <form method="POST" action="checksignup.php">
            <div class="border">


                <div class="container">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">

                        <section class="jumbotron">
                            <div class="img"></div>
                            <fieldset>
                                <legend>Sign
                                    <font color="red"> Up</font>
                                </legend>

                                <div class="form-group">
                                    <label for="fullName">Full name</label>
                                    <input type="text" name="name" id="fullName" placeholder="*First name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="*Email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="fullName">username</label>
                                    <input type="text" name="uname" id="fullName" placeholder="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Password</label>
                                    <input type="password" name="pwd" id="password" placeholder="*Password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Confirm Password</label>
                                    <input type="password" name="cpassword" id="password" placeholder="*Confirm Password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="fullName" placeholder="Address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone no.</label>
                                    <input type="text" name="phone" id="fullName" placeholder="Phone number" class="form-control" required>
                                </div>

                                <input type="submit" class="btn btn-success" value="Submit">

                            </fieldset>
                        </section>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>

    </div>
    </div>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/form1.js"></script>

    </form>

</body>

</html>