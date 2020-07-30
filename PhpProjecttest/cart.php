<!DOCTYPE html>
<?php
    include 'common.php';
    if(!isset($_SESSION['id'])){
        header('location: index.php');
    }
    $user_id=$_SESSION['id'];
    $fetch="select a.p_id 'p_id',a.p_name 'product',a.price 'price' from products a,orders b where a.p_id=b.p_id and b.user_id='$user_id' and b.status='added to cart'";
    $fetch_res= mysqli_query($con,$fetch) or die(mysqli_error($con));
    $count=1;
    $total=0;
?>
<html>
    <head>
        <title>Lifestyle Store-Products</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap_css.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container cart">
            <table class="table table-responsive">
                <caption>Your Cart</caption>
                <tbody>
                    <tr><th>#</th><th>Product</th><th>Price</th></tr>
                    <?php
                    while($row=mysqli_fetch_array($fetch_res)){?>
                        <tr><th><?php echo $count; ?></th><th><?php echo $row['product']; ?></th>
                            <th><?php echo $row['price']."            "; ?>
                                <a href="cart_rem.php?id=<?php echo$row['p_id']; ?>&uid=<?php echo$_SESSION['id']; ?>"><span class="glyphicon glyphicon-remove"></span></a>
                            </th></tr>
                    <?php 
                        $count++; $total+=$row['price'];
                            }
                    ?>
                    <tr><th></th><th></th><th><?php echo "Total:  ".$total; ?></th></tr>
                </tbody>
            </table>
        </div>  
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>