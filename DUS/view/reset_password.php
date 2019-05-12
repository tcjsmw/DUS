<?php
/**
 * Created by PhpStorm.
 * User: ZYQ
 * Date: 2019-05-12
 * Time: 20:19
 */
$current_user = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script_joyce.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/css_joyce.css">
</head>
<body>
<div class="individual_content">
    <div class="individual_second_layer">
        <div id="reset_form_div">
            <form action="../controller/reset_password.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="current_user" value="<?php echo $current_user ?>">
                    <label for="new_password">New Password : </label>
                    <input type="password" class="form-control" id="new_password" name="new_password">
                    <small id="emailHelp" class="form-text text-muted">*Please note that your password need to be within 6-16 characters, including at least 1 uppercase letter and 1 number.</small>
                </div>
                <div class="form-group">
                    <label for="new_password2">Re-type new password : </label>
                    <input type="password" class="form-control" id="new_password2" name="new_password">
                </div>
                <button type="submit" class="btn btn-primary" onclick="return new_password_check()">Confirm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

