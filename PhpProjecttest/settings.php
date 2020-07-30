
<?php
    include 'common.php';
    if(!isset($_SESSION['id'])){
        header('location: index.php');
        exit;
    }
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
        <div class="container log">
            <div class="panel panel-primary reg_body col-xs-6 col-xs-offset-3">
                <div class="panel-heading">
                    <h3>CHANGE PASSWORD</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="settings_script.php">
                        <?php if(isset($_GET['success'])){ ?>
                            <p class='text-warning'>Successfully updated !!!</p>
                        <?php } ?>
                        <div class="form-group">
                            <label for="old_pass">Old Password</label>
                            <input class="form-control" name="old_pass" type="password">
                        </div>
                        <div class="form-group">
                            <label for="new_pass">New Password</label>
                            <input class="form-control" name="new_pass" type="password">
                        </div>
                        <div class="form-group">
                            <label for="renew_pass">Re-type New Password</label>
                            <input class="form-control" name="renew_pass" type="password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>