<?php
    session_start();
    include('connection.php');
    $username=$_POST['uname'];
    $password=$_POST['pwd'];

    $result='SELECT * FROM info';
    $res=mysqli_query($con,$result);
    $i=mysqli_num_rows($res);
    if($i>0):
        while($row=mysqli_fetch_assoc($res)):
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            header('location:user.php');
        endwhile;
    else:
        header('location:login.php');
    endif;
?>