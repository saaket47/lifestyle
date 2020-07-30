<?php
    include 'common.php';
    $p_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add="insert into orders(p_id,user_id,status) values('$p_id','$user_id','added to cart')";
    $add_res= mysqli_query($con,$add) or die(mysqli_error($con));
    header('location: products.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
