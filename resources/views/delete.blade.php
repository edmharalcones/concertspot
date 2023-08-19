<?php
   $servername = "localhost";
   $username = "root";
   $password="";
   $database="laravel";
   $connection = new mysqli( $servername ,
   $username,
   $password,
   $database);

  if ($connection->connect_error){
      die("connection failed: " . $connection->connect_error);
  }

  $sql = "SELECT * FROM events";
  $result = $connection->query($sql);

  if (!$result){
      die("Invalid query" . $connection->connect_error);
  }
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from 'events' where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "Deleted successfully";

    }else{
        die(mysqli_error($con));
    }
} 
?>