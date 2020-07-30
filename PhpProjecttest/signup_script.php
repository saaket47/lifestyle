<?php
    include 'common.php';
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $password= mysqli_real_escape_string($con,md5($_POST['password']));
    $phone= mysqli_real_escape_string($con,$_POST['phone']);
    $city= mysqli_real_escape_string($con,$_POST['city']);
    $address= mysqli_real_escape_string($con,$_POST['address']);
    $check_query="select id from users where email='$email'";
    $check_query_res= mysqli_query($con,$check_query);
    if(mysqli_num_rows($check_query_res)>0){
        die("User already exists ! to login <a href='login.php'>click here</a>");
    }
    $insert_query="insert into users(name,email,password,phone,city,address) values('$name','$email','$password','$phone','$city','$address')";
    $query_res= mysqli_query($con,$insert_query) or die(mysqli_error($con));
    $_SESSION['name']=$name;
    $_SESSION['id']= mysqli_insert_id($con);
    echo 'user successfully created with ID ='.$_SESSION['id'].'To browse our products,<a href="products.php">click here!</a>';
?>
