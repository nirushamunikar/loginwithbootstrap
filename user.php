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
        $(function () {
            $('#date').combodate();
        });
    </script>
    <style>
        th {
    background-color: red;
    color: white;
    padding: 10px;
    border: 1px solid #fff;
}
tr:nth-child(even) {background-color: #f2f2f2}
tr:nth-child(odd) {background-color: #f2f2f2}
th, td {
    padding: 15px;
    text-align: left;
}
table{
    margin-top:0%;
}
.hello{
    font-size:6em;
    color:#fff;
    text-align:center;
}
.form{
    margin-left:46%;
    margin-top:10%;
}
.form input{
    padding:5px 30px;
}
        </style>
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
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
    <div class="col-md-12 parallaxA">
        
<?php
session_start();
include('connection.php');
if(!isset($_SESSION['username']))
header('location:login.php');
$username=$_SESSION['username'];
echo '<div class="hello">'.'hello '.$username. '</div>';
echo '<div class="hello">'.'Your detail information'.'</div>';
$selectQuery="SELECT * from info where username='$username'";
$res=mysqli_query($con,$selectQuery);

?>
<div class="col-md-6 table">
<table border='2'>
    <tr>
        <th width="25%" height="50" >Name</th>
        <th width="25%" height="50">Email</th>
        <th width="25%" height="50">Address</th>
        <th width="25%" height="50">Phone number</th>

    </tr>

<?php
    $i=mysqli_num_rows($res);
    if($i>0):
        while($row=mysqli_fetch_assoc($res)):
            $name=$row['name'];
            $email=$row['email'];
            $address=$row['address'];
            $phone=$row['phone'];
            echo '<tr>';
                echo '<td height="50">' .$name.'</td>';
                echo '<td>' .$email.'</td>';
                echo '<td>' .$address.'</td>';
                echo '<td>' .$phone.'</td>';  
            echo '</tr>';
        endwhile;
    endif;
  ?>


</table>
<form method="GET" action="logout.php">
   <div class="form">
        <input type="submit" value="logout">
    </div>
</form>

<?php
mysqli_close($con);
?>
 </div>
 </div> 

<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/form1.js"></script>
</form>
 
 
</body>
</html>