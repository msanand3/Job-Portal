<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "session";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,10th,12th,cpi,NOP,contact,email,address,job FROM inputcompanydetails";
$result = $conn->query($sql);
echo "<b>Company Details</b>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> <b>id:</b> ". $row["id"]. " - <b>10th Percentile:</b> ". $row["10th"]. "   <b>12th Percentile </b>" . $row["12th"];
        echo "<b>cpi:</b> ". $row["cpi"]. " - <b>NOP:</b> ". $row["NOP"]. "   <b>Contact:</b>" . $row["contact"];
        echo "<b>email:</b> ". $row["email"]. " - <b>address:</b> ". $row["address"]. "   <b>job:</b>" . $row["job"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<form action="displaystudent.php" method="post">

  </div>
  <button type="submit" class="btn btn-primary"> Want to see student details </button>
</form>

</body>
</html>
