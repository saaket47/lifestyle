<?php
    include 'common.php';
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,md5($_POST['password']));
    $email_check="select id from users where email='$email'";
    $email_check_res= mysqli_query($con,$email_check) or die($con);
    if(mysqli_num_rows($email_check_res)<=0){
        header("location: login.php?msg_email");
        exit;
    }
    $pass_check="select id,name,password from users where email='$email'";
    $pass_check_res= mysqli_query($con,$pass_check) or die($con);
    $row= mysqli_fetch_array($pass_check_res);
    if($row['password']!=$password){
        header("location: login.php?msg_pass");
        exit;
    }
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    echo 'Successfully logged in! To brows our products <a href="products.php">click here!</a>';
    ?>  
