<?php
include "header.php";
include "side.php";
session_start();
if(!isset($_SESSION["loginStatus"])){
    echo "<script>
            window.location = 'navLoginUser.php';
        </script>";
}
// require "dbconfig.php";

?>

<div class="span9">
    <h1>Reset Password</h1>
</div>



<?php include "footer.php";?>