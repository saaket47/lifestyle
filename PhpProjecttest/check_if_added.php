<?php
    function check_if_added($p_id,$con){
        $user_id=$_SESSION['id'];
        $check="select p_id,status from orders where user_id='$user_id' and p_id='$p_id'";
        $check_res= mysqli_query($con,$check) or die(mysqli_error($con));
        return mysqli_num_rows($check_res);
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
