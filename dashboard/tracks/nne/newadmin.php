<?php
    include "connect.php";

      /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }
     
     $fname= mysqli_real_escape_string($conn, $_POST["admin_fullname"]);
     $password = mysqli_real_escape_string($conn, $_POST["admin_password"]);
     $passwordtwo = mysqli_real_escape_string($conn, $_POST["admin_confirm_password"]);
     $phno= mysqli_real_escape_string($conn, $_POST["admin_phonenumber"]);
     $email= mysqli_real_escape_string($conn, $_POST["admin_email"]);
     
     $sql_u = "SELECT * FROM admincontrol WHERE  admin_email='$email' ";       
     $res_u = mysqli_query($conn, $sql_u);

         if ($password != $passwordtwo){
            echo '<script>console.log("Passwords do no match");</script>';
            
        $messagee = "Passwords do not match";
        echo "<script type='text/javascript'>alert('$messagee');</script>";
        echo '<script> window.location.replace("../createadmin.php?sign-up=failed"); </script>';

        }
    
        
     else{
 
         if(mysqli_num_rows($res_u) > 0){
            echo '<script>console.log("The email dey inside the db already!!!");</script>';
         
        $messagee = "Email exists already!! Sign in or use another email";
        echo "<script type='text/javascript'>alert('$messagee');</script>";
        echo '<script> window.location.replace("../createadmin.php?sign-up=failed"); </script>';
     
        }
        else{
         $cust_insert_query= " INSERT INTO `admincontrol`(`admin_id`, `admin_fullname`, `admin_email`, `admin_password`, `admin_phno`)
          VALUES (NULL, '$fname', '$email',  '$password','$phno');"; 
         $cust_result = $conn->query($cust_insert_query);
       
        
       
         if($cust_result){
            echo '<script>console.log("E don enter the db");</script>';
            echo '<script> window.location.replace("../createadmin.php?sign-up=success"); </script>';

         }
         else{
            echo '<script>console.log("E no no enter the db");</script>';
            echo '<script> window.location.replace("../createadmin.php?sign-up=failed"); </script>';

         }

        }

        }

 
    
    // end line
    

    
?>


