<?php
    include "connect.php";

      /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
   
    
$ad_id = $_GET['admin'];


$sql_u = "DELETE  FROM admincontrol WHERE  admin_id='$ad_id' ";       
     $res_u = mysqli_query($conn, $sql_u);
 
     $sql_n = "DELETE  FROM tracks WHERE  admin_id='$ad_id' ";       
     $res_n = mysqli_query($conn, $sql_n);
 





     if ($res_u && $res_n){
        $s1=  '  SET @autoid :=0';
        $s2='UPDATE tracks SET track_no = @autoid:=(@autoid+1)';
$s3 = 'ALTER TABLE tracks AUTO_INCREMENT=1';
$ss1 = mysqli_query($conn, $s1);
$ss2 = mysqli_query($conn, $s2);
$ss3 = mysqli_query($conn, $s3);

if($ss1 && $ss2 && $ss3){
    echo '<script>console.log("e update");</script>';

}

        echo '<script>console.log("deleted");</script>';
     echo '<script> window.location.replace("../deleteadmin.php?delete=successful"); </script>';

   
    }
 
 
    

    
      
 
    
    // end line
    

    
?>


