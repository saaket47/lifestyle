<!DOCTYPE html>
<?php
    include 'common.php';
    include 'check_if_added.php';
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
        <div class="container p_content">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras,shirts and watches for you.No need to hunt anymore.Find them all here.</p>
            </div>
            <div class="row">
                <div class="col-sm-3 thumbnail">
                        <img src="images/2.jpg">
                        <div class="caption">
                            <h3>Canon EOS</h3>
                            <h6>Price:Rs36000.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(1,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=1" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/3.jpg">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <h6>Price:Rs40000.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(2,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=2" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/4.jpg">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <h6>Price:Rs35000.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(3,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=3" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/5.jpg">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <h6>Price:Rs80000.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(4,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=4" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 thumbnail">
                        <img src="images/6.jpg">
                        <div class="caption">
                            <h3>H&W</h3>
                            <h6>Price:Rs3600.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(5,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=5" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/8.jpg">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <h6>Price:Rs2300.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(6,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=6" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/14.jpg">
                        <div class="caption">
                            <h3>Maldini</h3>
                            <h6>Price:Rs2500.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(7,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=7" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/13.jpg">
                        <div class="caption">
                            <h3>Peter's</h3>
                            <h6>Price:Rs2200.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(8,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=8" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 thumbnail">
                        <img src="images/9.jpg">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <h6>Price:Rs4000.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(9,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=9" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/10.jpg">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <h6>Price:Rs3800.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(10,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=10" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/11.jpg">
                        <div class="caption">
                            <h3>HMT Sigma</h3>
                            <h6>Price:Rs5000.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(11,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=11" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
                <div class="col-sm-3 thumbnail">
                        <img src="images/5.jpg">
                        <div class="caption">
                            <h3>Swiss #2313</h3>
                            <h6>Price:Rs8000.00</h6>
                            <?php if(!isset($_SESSION['id'])){ ?>
                                <a href="login.php" class="btn btn-block btn-primary">Buy now</a>
                            <?php }else{ if(check_if_added(12,$con)!=0){ ?>
                                <a href="products.php" class="btn btn-block btn-success" disabled>Added</a>
                            <?php }else{ ?>
                                <a href="add.php?id=12" class="btn btn-block btn-primary">Add to cart</a>
                            <?php } } ?>
                        </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
