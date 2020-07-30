<!DOCTYPE html>
<?php
include'common.php';
if(isset($_SESSION['id'])){
    header('location: products.php');
    exit;
}
?>
<html>
    <head>
        <title>Lifestyle Store</title>
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
        <div class="container-fluid banner">
            <div class="banner_content container">
                <h1>We sell lifestyle.</h1>
                <h6>Flat 40%OFF on premium brands</h6>
                <h5 class="btn btn-danger btn-lg-active"><a href="products.php" id="shop_now" target="_blank">Shop Now</a></h5>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
