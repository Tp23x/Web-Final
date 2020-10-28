<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "Child";
  $connect = mysqli_connect($servername, $username, $password, $databasename);
  mysqli_query($connect, "SET NAMES 'utf8'");
  if($connect){
      echo " ";
  }else {
      echo "Not Connected";
  }
  ?>