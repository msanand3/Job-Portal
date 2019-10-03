<?php

session_start();
header('location:giveid2.php');

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

  $name=$_POST['user'];
  $pass=$_POST['password'];

  $q="select *from companysignup where name='$name' && password='$pass'";

  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
      echo "User Already Exists";
  }
  else {
      $qy="insert into companysignup(name,password) values ('$name','$pass')";
      mysqli_query($con,$qy);
  }




 ?>
