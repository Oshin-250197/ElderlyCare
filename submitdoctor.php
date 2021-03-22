<?php
include_once './connection.php';
session_start();
$docEmail= $_POST['doc_email'];
$docPass= $_POST['doc_password'];
if($_SESSION["userlogged"]!=NULL){
    header("location:showpatientdetails.php");
}
$selectSR = mysqli_query($conn, "SELECT drname, drpass FROM `doctorlogin` ");
while ($row = mysqli_fetch_array($selectSR)) {
    $drname = $row['drname'];
    $drpass = $row['drpass'];
    if($drname == $docEmail && $drpass == $docPass){
        $_SESSION["userlogged"] = "TRUE";
        header("location:showpatientdetails.php");
    }else{
        
        echo "<script>
            alert('Please enter valid number.');
            window.location.href='index.php';
           </script>";
//        header("location:index.php");
    }
}