<?php
    include('connection.php');
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

  
    $insertQuery="INSERT into info (email,username,password,name,address,phone) VALUES ('$email','$uname','$pwd','$name','$address','$phone')";
    $res=mysqli_query($con,$insertQuery);
    if(!$res){
        echo "error in insertion";
        die(mysqli_error ($con));
    }
    else{
        echo "successful";
    }
?>