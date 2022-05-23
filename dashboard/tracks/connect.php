

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("sql305.epizy.com", "epiz_31782074", "cj0NXisYrn8", "epiz_31782074_directcargo");
 if($conn){
    echo '<script>console.log("connection successful");</script>';

 }
// Check connection
else{
    die(header("location:../tracks/account.php?connection=failed"));
}

?>