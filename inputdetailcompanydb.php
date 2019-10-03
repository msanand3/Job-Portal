<?php

session_start();
$con=mysqli_connect('localhost','root');
if($con)
  {
      echo "Your Job requirement registered:- ";
  }
else
  {
      echo "No connection";
  }
  mysqli_select_db($con,'session');
  $identity=$_POST['id'];
  $job=$_POST['job'];
  $per10=$_POST['10per'];
  $per12=$_POST['12per'];
  $gra=$_POST['cpi'];
  $nop=$_POST['ni'];
  $co=$_POST['contact'];
  $em=$_POST['email'];
  $add=$_POST['address'];

  $q="INSERT INTO inputcompanydetails values ('$identity','$per10','$per12','$gra','$nop','$co','$em','$add','$job')";
  mysqli_query($con,$q);







 ?>
