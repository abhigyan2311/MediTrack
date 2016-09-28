<?php 
  require './db.php';
  $con = mysqli_connect($host,$user,$password,$db);
  $uid = $_POST['uid'];
  $time = $_POST['time'];
  //$name = $_POST['name'];
  //$address = $_POST['address'];
  $sql = "insert into track (uid,time) values ('$uid`','$time')";
  if(mysqli_query($con,$sql)){
    echo 'success';
  }
  else{
    echo 'failure';
  }
  mysqli_close($con);
?>

