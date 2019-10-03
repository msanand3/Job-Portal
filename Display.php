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

  $name=$_POST['user'];
  $pass=$_POST['password'];

  $q="select *from tporecord where name='$name' && password='$pass'";

  $result=mysqli_query($con,$q);

  if($num==1)
  {
      $_SESSION['USERNAME']=$name;
      header('location:displaytable.php');
  }
  else {
    header('location:displaytable.php');

  }




 ?>
