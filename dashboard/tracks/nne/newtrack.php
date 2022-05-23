<?php
     include "validate-customer.php";
  include "connect.php";
 


    include "session-timeover.php";
      /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
  
    if(isset($_SESSION['loggedIn_cust_id'])) { 
        $id = $_SESSION['loggedIn_cust_id'];
     
     $trackingid= mysqli_real_escape_string($conn, $_POST["tracking_id"]);
     $r_name = mysqli_real_escape_string($conn, $_POST["r_name"]);
     $s_name = mysqli_real_escape_string($conn, $_POST["s_name"]);
     $r_address = mysqli_real_escape_string($conn, $_POST["r_address"]);
     $c_code = mysqli_real_escape_string($conn, $_POST["country_code"]);
     $phno= mysqli_real_escape_string($conn, $_POST["r_phone_number"]);
     $r_co= mysqli_real_escape_string($conn, $_POST["r_country"]);
     $s_address= mysqli_real_escape_string($conn, $_POST["s_address"]);
     $s_co= mysqli_real_escape_string($conn, $_POST["s_country"]);
     $c_lo= mysqli_real_escape_string($conn, $_POST["c_location"]);
     $p_description= mysqli_real_escape_string($conn, $_POST["p_description"]);
     $weight= mysqli_real_escape_string($conn, $_POST["weight"]);
     $d_d= mysqli_real_escape_string($conn, $_POST["d_date"]);
     $s_d= mysqli_real_escape_string($conn, $_POST["s_date"]);
     $q_price= mysqli_real_escape_string($conn, $_POST["q_price"]);
     $f_type= mysqli_real_escape_string($conn, $_POST["freight_type"]);
     $status= mysqli_real_escape_string($conn, $_POST["status"]);

     $r_phno = '('.$c_code.')'.$phno;
 
 
 
  


     
     $sql_u = "SELECT * FROM tracks WHERE  admin_id='$id' ";       
     $res_u = mysqli_query($conn, $sql_u);

         
 
        //     echo '<script>console.log("The email dey inside the db already!!!");</script>';
         
        // $messagee = "Email exists already!! Sign in or use another email";
        // echo "<script type='text/javascript'>alert('$messagee');</script>";
        // echo '<script> window.location.replace("../auth/sign-up.php"); </script>';
     
        
         $newtracksinsert= 
         "INSERT INTO `tracks` (`track_no`, `admin_id`, `tracking_id`,
          `to_location`, `from_location`, `current_location`, `goods_description`,
           `freight_type`, `status`, `amount`, `to_country`, `from_country`, `weight`, 
           `ship_date`, `delivery_date`, `receiver_name`, `receiver_phone_number`, `sender_name`)
          VALUES
           (NULL,'$id', '$trackingid', '$r_address', '$s_address', '$c_lo',
            '$p_description','$f_type','$status','$q_price','$r_co','$s_co'
            ,'$weight','$s_d','$d_d','$r_name','$r_phno','$s_name');"; 
         $newtracksresult = $conn->query($newtracksinsert);
       
       
        
       
         if($newtracksresult){
            echo '<script>console.log("New track created");</script>';
            echo '<script> window.location.replace("../account.php?newtrack=successful"); </script>';

         }
         else{
            echo '<script>console.log("Error couldnt create track");</script>';
            echo '<script> window.location.replace("../account.php?newtrack=failed"); </script>';

         }

    }

        
 
    
    // end line
    

    
?>


