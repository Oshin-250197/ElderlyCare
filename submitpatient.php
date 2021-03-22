<?php

include_once './connection.php';
session_start();
$RegNo = $_POST['regMobNo'];

if($_SESSION["userlogged"]!=NULL){
    header("location:patientdisplaydata.php?mobile=$RegNo");
}
$selectSR = mysqli_query($conn, "SELECT mobile FROM `data` ");
while ($row = mysqli_fetch_array($selectSR)) {
    $RegMobile = $row['mobile'];
    if($RegMobile == $RegNo){
        $_SESSION["userlogged"] = "TRUE";
        header("location:patientdisplaydata.php?mobile=$RegNo");

    }else{
        
        echo "<script>
            alert('Please enter valid number.');
            window.location.href='index.php';
           </script>";
//        header("location:index.php");
    }
}