<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
        <div class="container log">
            <div class="panel col-xs-6 col-xs-offset-3 reg_body panel-primary">
                <div class="panel-heading">
                    <h3>LOGIN</h3>
                </div>
                <div class="panel-body">
                    <p class="text-warning">
                        Login to make a purchase
                    </p>
                    <form method="post" action="login_script.php" id="login_form">
                        <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control" name="email" required="true">
                        <?php if(isset($_GET['msg_email'])){ ?>
                            <p class='text-warning'>No such email registered</p>
                        <?php } ?>
                        </div>
                        <div class="form-group">
                        <input type="Password" placeholder="Password" class="form-control" name="password" required="true">
                        <?php if(isset($_GET['msg_pass'])){ ?>
                            <p class='text-warning'>Wrong password</p>
                        <?php } ?>
                        </div>
                        <button  type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </form>
                </div>
                <div class="panel-footer">
                    <h6>Don't have an account yet? <a href="signup.php" id="login_reg">Register</a></h6>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
</html>

