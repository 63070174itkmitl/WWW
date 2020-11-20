<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ing63070174.mysql.database.azure.com', 'yahogoo00@ing63070174', 'Ing63070174', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Name'];
$comment = $_POST['Comment'];
$link = $_POST['Action'];


$sql = "INSERT INTO Guestbook (Name , Comment , Action) VALUES ('$name', '$comment', '$action')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>