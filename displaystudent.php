<!DOCTYPE html>
<html>
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

$sql = "SELECT id,10stan,12th,cpi,NOP,contact,email,address FROM inputstudentdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "<br> <b>id:</b> ". $row["id"]. " - <b>10th Percentile:</b> ". $row["10stan"]. "   <b>12th Percentile </b>" . $row["12th"];
      echo "<b>cpi:</b> ". $row["cpi"]. " - <b>NOP:</b> ". $row["NOP"]. "   <b>Contact:</b>" . $row["contact"];
      echo "<b>email:</b> ". $row["email"]. " - <b>address:</b> ". $row["address"];

    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
