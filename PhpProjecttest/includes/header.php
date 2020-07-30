<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <?php
                    if(isset($_SESSION['id'])){?>
                        <div id="myNa" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
                    </ul>
                </div>
                <?php }
                    else{
                ?>   
                    <div id="myNav" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                        <li><a href='login.php'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
                    <?php } ?>
            </div>
        </nav>
<div class='modal fade' id='mymodal' role='dialog'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button class='close' data-dismiss='modal'>&times;</button>
            </div>
            <div class='modal-body'><p>This is a modal</p></div>
            <div class='modal-footer'>
                <button class='btn btn-primary' type='button' data-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>

