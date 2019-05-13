<?php
include "header.php";
include "side.php";
session_start();
if($_SESSION["loginStatus"] != 1){
    echo "<script>
            window.location = 'navLoginUser.php';
        </script>";
}
require "dbconfig.php";

?>

<div class="span9">
    <h1>Delete Facilities</h1>
</div>

    <!-- Functions to alert if a value is null -->
    <script>
        function adminFacilitiesDeleteId(){
            if(document.getElementById("adminFacilitiesDeleteId").value==""){
                alert("Please enter Facility Id.");
                return false;
            }
        }
    </script>

    <!-- Delete a facility -->
    <div class = "span9">
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" id="adminFacilitiesDelete">
            <p>
                <label for="adminFacilitiesDeleteId">Please input the Facility Id for deleting a facility: </label>
                <input type="number" name="adminFacilitiesDeleteId" id="adminFacilitiesDeleteId"/>
            </p>
            <div class = "button">
                <input type="submit" onclick="return adminFacilitiesDeleteId();" value="Submit" />
            </div>
        </form>
    </div>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql = "DELETE FROM Xdqrs89_SE2_DUS.facility WHERE facility.id = '" . $_POST['adminFacilitiesDeleteId'] . "'";
    $pdo->exec($sql);

    echo "<script>
            alert('success!');
            //window.location = 'facilities.php';
        </script>";
}
include "footer.php";
?>