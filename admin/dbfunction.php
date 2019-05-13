<?php
require "dbconfig.php";
session_start();

//logout 登出 
if($_GET["action"] == "logout"){
    // session_unset();
    session_destroy();
    echo "<script>
        alert('Logged out!');
        window.location='facilities.php'
        </script>";
}

?>