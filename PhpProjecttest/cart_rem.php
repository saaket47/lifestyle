<?php
    include 'common.php';
    $pid=$_GET['id'];
    $uid=$_GET['uid'];
    $query="delete from orders where p_id='$pid' and user_id='$uid' and status='added to cart'";
    $query_result= mysqli_query($con,$query) or die(mysqli_error($con));
    header('location: cart.php');

?>