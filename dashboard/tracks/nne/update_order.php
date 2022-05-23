<?php

include "validate-customer.php";
include "connect.php";


if(isset($_SESSION['loggedIn_cust_id']) && isset($_GET['trackingid'])) { 
   $id = $_SESSION['loggedIn_cust_id'];
   $tid = $_GET['trackingid'];
   $xx = mysqli_real_escape_string($conn, $_GET["trackingid"]);

   echo $tid;

   
   $c_location= mysqli_real_escape_string($conn, $_GET["location"]);
   $o_status = mysqli_real_escape_string($conn, $_GET["status"]);
ECHO $c_location;
echo '<script>console.log("first part work ");</script>';

   $sql_u = "SELECT * FROM tracks WHERE admin_id='$id' AND tracking_id='$tid'";       
$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
       
    $gg= "UPDATE `tracks` SET `current_location`='$c_location',`status`='$o_status' WHERE tracking_id='$tid'";
  $nn = mysqli_query($conn,$gg);
  if($nn){
        echo '<script>console.log("omo e don work oo ");</script>';
        header("location:../trackdetails.php?trackingid=$tid&update=successful");      

       }
       else{
        echo '<script>console.log("e no work for here ");</script>';

       }
} 
else{
   echo '<script>console.log("e don cast last last nah everybody go chop breakfast");</script>';

}
   

}
else{
   echo '<script>console.log("e no work ");</script>';

}


?>