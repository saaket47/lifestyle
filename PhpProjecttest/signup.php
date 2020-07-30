<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
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
        <div class="container reg_body log">
            <div class="col-xs-6 col-xs-offset-3">
                <h2>SIGN UP</h2>
                <br>
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" name="name" required="true">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" name="email" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" name="password" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Contact" class="form-control" name="phone" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="City" class="form-control" name="city" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Adress" class="form-control" name="address" required="true">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </form>
            </div>
        </div>
        <footer>
            <div class="container fc">
                <p>“Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </div>
        </footer>
    </body>
</html>