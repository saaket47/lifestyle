<?php
    include 'common.php';
    $old_pass= mysqli_real_escape_string($con,md5($_POST['old_pass']));
    $new_pass= mysqli_real_escape_string($con,md5($_POST['new_pass']));
    $renew_pass= mysqli_real_escape_string($con,md5($_POST['renew_pass']));
    if($new_pass!=$renew_pass){
        echo 'Passwords did not match!Try again';
        header('location: settings.php');
        exit;
    }
    $id=$_SESSION['id'];
    $check="select password from users where id='$id'";
    $check_res= mysqli_query($con,$check) or die(mysqli_error($con));
    $pass= mysqli_fetch_array($check_res) or die(mysqli_error($con));
    if($pass['password']==$old_pass){
        $update="update users set password='$new_pass' where id='$id'";
        $update_res= mysqli_query($con,$update) or die(mysqli_error($con));
        header('location: settings.php?success');
        exit;
    }
    echo 'Wrong pass, try again';
?>
