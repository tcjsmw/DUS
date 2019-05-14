<?php
include "header.php";
include "header2.php";
include "side.php";
// require "dbconfig.php";

?>

<div class="span9">
    <h1>Forgot Password</h1>
</div>




<div class="span9">
    <form id="form1" name="form1" method="post" action="navLoginQuestion.php">
        <div>
            <label for="C_name">Your username</label>
            <input id="C_name" name="C_name" type="text" />
        </div>

        <div>
            <label for="C_email">Your registered email</label>
            <input id="C_email" name="C_email" type="text" />
        </div>
        
        <!-- <label>您的電話號碼：</label>
        <input id="C_tel" name="C_tel" type="text" />

        <label>意見：</label>
        <textarea id="C_message" name="C_message"></textarea> -->

        <!-- <div>
        <input id="submit" name="submit" type="submit" value="Submit" />
        </div> -->
        <br>
        <div>
            <button type="submit" class="btn btn-warning" name="submit">Submit</button>
            <a href="navLoginUser.php" class="btn btn-danger">Cancel</a>
        </div>

    </form>
</div>


<?php include "footer.php";?>

