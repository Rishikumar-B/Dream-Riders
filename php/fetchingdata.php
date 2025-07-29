<?php
  
  $db_SERVER="localhost";
  $db_USER="root";
  $db_pass="";
  $db_name="trialdb";

  $conn="";


  try{
      $conn=mysqli_connect($db_SERVER,$db_USER,$db_pass,$db_name);
  echo "you are connected";
  }
  catch(mysqli_sql_exception){
      echo "you are not connected";
  }

  




  $sql = "SELECT * from student";

  $res=mysqli_query($conn,$sql);

  if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
       echo "{$row['ID']}<br>";
       echo "{$row['NAME']}<br>";

       echo "{$row["PASSWORD"]}<br>";
       echo "{$row["TIME"]}<br>";
    }
  }
   
   mysqli_close($conn);
?>