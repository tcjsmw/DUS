<?php
//connect to database to display games
$servername = "mysql.dur.ac.uk";
$username = "dqrs89";
$password = "dqrs89ru34nner";
$dbname = "Xdqrs89_SE2_DUS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
   
   
      // username and password sent from form 
      
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Select * from facility where id = 12344571";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
 while($row = $result->fetch_assoc()) {
	 
	
	$FacilityPrice = $row['price'];	
	$FacilityCapacity = $row['capacity'];
	 
  }
}  else 
{
    echo "0 results";
}
$conn->close();

?>
<html>
<head>
<meta charset="utf-8">
<title>Athletics Track Prices</title>

<link href="DUSport.css" rel="stylesheet">
<link href="atheletics_price.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">

<div id="wb_txtathheadsprices" style="position:absolute;left:230px;top:0px;width:467px;height:52px;z-index:9;">
<span style="color:#4F4F4F;font-family:Verdana;font-size:43px;">Athletics Track Prices</span></div>
<div id="wb_txtaathelfullpricelist" style="position:absolute;left:230px;top:83px;width:490px;height:192px;z-index:10;">
<span style="color:#4F4F4F;font-family:Arial;font-size:13px;line-height:24px;"><strong>Maximum number of people who can use the athletes track facilities <u><?php echo $FacilityCapacity ?></u> <br></strong><br>Athletes Track price Per Day - £ <?php echo $FacilityPrice ?></span></div>
</div>
</body>
</html>
<?php
include "footer.php"
?>