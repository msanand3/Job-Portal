<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con)
  {
      echo " ";
  }
else
  {
      echo "No connection";
  }
  mysqli_select_db($con,'session');
$q="SELECT id FROM companysignup ORDER BY id DESC LIMIT 1";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($result);
echo "Your user id is (Remember it ):";
echo $row['id'];


?>
