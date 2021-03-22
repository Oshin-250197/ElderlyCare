<?php
include 'connection.php';

$fullname=$_POST['fullname'];
$age=$_POST['age'];
$height='';
$weight=$_POST['weight'];
$mobile=$_POST['regmob'];
$date=$_POST['date'];
$disease=$_POST['disease'];
 echo $fullname;echo '<br>';
 echo $age;echo '<br>';
 echo $height;echo '<br>';
 echo $weight;echo '<br>';
 echo $mobile;echo '<br>';
 echo $date;

 $user_check_query = "SELECT * from data WHERE mobile=$mobile";
 $result = mysqli_query($conn, $user_check_query);
 $user = mysqli_fetch_assoc($result);
if ($user) {
  header("location:index.php?register=alreadyregistered");
}else {
  
  $sql = "INSERT INTO data (`name`, `age`, `height`, `weight`, `mobile`,`disease`, `date`)
  VALUES ('$fullname', '$age', '$height', '$weight', '$mobile','$disease' ,'$date')";

  if ($conn->query($sql) === TRUE) {
    header("location:index.php?register=success");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}




?>