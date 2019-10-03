<?php

session_start();
$con=mysqli_connect('localhost','root');

  mysqli_select_db($con,'session');
  $identity=$_POST['id'];
  $per10=$_POST['10per'];
  $per12=$_POST['12per'];
  $gra=$_POST['cpi'];
  $nop=$_POST['ni'];
  $loc=$_POST['location'];
  $co=$_POST['contact'];
  $em=$_POST['email'];
  $add=$_POST['address'];

  $q="INSERT INTO inputstudentdetails values('$identity','$per10','$per12','$gra','$nop','$loc','$co','$em','$add')";
  mysqli_query($con,$q);
      $flag=0;
      $q="select id,10th,12th,cpi,NOP,contact,email,address,job from inputcompanydetails";
      $result=mysqli_query($con,$q);
      $resultcheck=mysqli_num_rows($result);

      if($resultcheck > 0)
      {
        while($row=mysqli_fetch_assoc($result))
        {
          if($row['10th']<=$per10)
          {
            $flag=1;
          }
          if($row['12th']<=$per12)
          {
            $flag=$flag+1;
          }
          if($row['cpi']<=$gra)
          {
            $flag=$flag+1;
          }
          if($row['NOP']<=$nop)
          {
            $flag=$flag+1;
          }
          if($flag==4)
          {

              echo "YOU ARE ELIGIBLE FOR FOLLOWING JOBS";
              echo "</br>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>ID</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>10th Percentile</b>";
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo "<b>12th Percentile</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>CPI</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>NOP</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>Contact</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>Email</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>Address</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "<b>Job Description</b>";
              echo "&nbsp&nbsp&nbsp";
              echo "</br>";

              echo "&nbsp&nbsp&nbsp";
              echo $row['id'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['10th'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['12th'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['cpi'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['NOP'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['contact'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['email'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['address'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
              echo $row['job'];
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp";


          }
        }
      }



    $con->close();
 ?>
