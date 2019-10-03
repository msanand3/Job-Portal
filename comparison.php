<?php

session_start();
$con=mysqli_connect('localhost','root');
if($con)
  {
      echo "Connection Successful";
  }
else
  {
      echo "No connection";
  }
  mysqli_select_db($con,'session');
  $q="select 10th,12th,cpi,NOP from inputcompanydetails";
  $result=$con->query($q);

  if($result->num_row>0)
  {
    while($row=$result->fetch_assoc())
    {

    }
  }








 ?>
