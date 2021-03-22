<?php
include_once './connection.php';

$mobile = $_POST['conmobile'];

  $sql_1="UPDATE `data` SET `status`=1 WHERE `mobile`='$mobile' ";
        
        if(mysqli_query($conn, $sql_1)) 
        {
            echo "<script>
                    window.location.href='showpatientdetails.php';
                  </script>";
        }else{
         
        } 

