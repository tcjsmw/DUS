<?php
/**
 * Created by PhpStorm.
 * User: ZYQ
 * Date: 2019-05-10
 * Time: 15:15
 */

require_once ('../controller/profile.php');
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
    <div id="modify_btn_container">
        <button id="modify_profile" class="btn btn-primary" onclick="window.location.href='update_profile.php'">Modify</button>
    </div>
    <div>
        <div id="show_pic">
            <img src="<?php echo $current_user_all['pic'] ?>" id="profile_pic">
        </div>
        <div class="show_profile_info">
            <table class="table">
                <tbody>
                <tr>
                    <th scope="row">User id :</th>
                    <td><?php echo $current_user_all['id'] ?></td>
                    <th scope="row">Username :</th>
                    <td><?php echo $current_user_all['username'] ?></td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <th scope="row">Email :</th>
                    <td><?php echo $current_user_all['email'] ?></td>
                    <th scope="row">Gender :</th>
                    <td><?php echo $current_user_all['gender'] ?></td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <th scope="row">Uni member? :</th>
                    <td><?php  if($current_user_all['is_uni_member']){
                        echo "Yes";
                        }else{
                        echo "No";
                        } ?></td>
                    <th scope="row">Date of birth :</th>
                    <td><?php echo $current_user_all['date_of_birth'] ?></td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <th scope="row">Tel :</th>
                    <td><?php echo $current_user_all['tel'] ?></td>

                </tr>
                <tr>
                    <th scope="row">Address :</th>
                    <td><?php echo $current_user_all['address'] ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
