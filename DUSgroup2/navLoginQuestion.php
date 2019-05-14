<?php
include "header.php";
include "header2.php";
include "side.php";

require "dbconfig.php";

$C_name=$_POST['C_name'];
$C_email=$_POST['C_email'];

$sql = "SELECT username, email, security_question FROM user
WHERE username = :username AND email = :email";
$statement = $pdo -> prepare($sql);
$statement -> bindParam(":username", $C_name, PDO::PARAM_STR);
$statement -> bindParam(":email", $C_email, PDO::PARAM_STR);
$statement -> execute();

if($statement -> rowCount() == 1){
    // match
    $data = $statement -> fetch();
}else{
    // invalid username or email
    echo "<script>
            alert('Invalid username or email.');
            window.location = 'navLoginPwdForgot.php';
        </script>";
}
unset($statement);
unset($pdo);

// print_r($data);

?>

<div class="span9">
    <h1>Recovery Question</h1>
</div>

<div class="span9">
    <form method="post" action="pwdSender.php">
        <div>   
            <input type="hidden" name="C_name" value="<?php echo $data["username"]?>" >
        </div>

        <div>
            <input type="hidden" name="C_email" value="<?php echo $data["email"]?>" >
        </div>

        <div>
            <label>Your recovery question:</label>
            <textarea style="width:400px" readonly="readonly"><?php echo $data["security_question"];?></textarea>
        </div>

        <div>
            <label for="answerId">Your answer:</label>
            <input type="textarea" style="width:400px" placeholder="Your answer" id="answerId" name="answer" required>
        </div>
        
        <br>
        <div>
            <button type="submit" class="btn btn-warning" name="submit">Submit</button>
            <a href="navLoginUser.php" class="btn btn-danger">Cancel</a>
        </div>

    </form>
</div>





<?php include "footer.php";?>