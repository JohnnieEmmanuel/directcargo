<?php

include "connect.php";



   
   $track= mysqli_real_escape_string($conn, $_POST["track_order"]);


   $sql_u = "SELECT * FROM tracks WHERE tracking_id='$track'";       
$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
       echo '<script>console.log("omo e don work oo ");</script>';
     header("location:../trackorder.php?trackingid=$track");      
} 
else{
    echo '<script>console.log("Tracking Id doesnt exist ");</script>';
$i =0;
if($i=0){
  
}
        header("location:../../../index.php?trackingid=invalid");      

}



?>