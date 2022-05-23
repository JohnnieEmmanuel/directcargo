<?php
    include "connect.php";
    
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    $adminemail = mysqli_real_escape_string($conn, $_POST["admin_email"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["admin_password"]);

    $sql0 =  "SELECT * FROM admincontrol WHERE admin_email='".$adminemail."' AND admin_password='".$pwd."'";
    $result = $conn->query($sql0);
    $row = $result->fetch_assoc();

    if (($result->num_rows) > 0) {
        $_SESSION['loggedIn_cust_id'] = $row["admin_id"];
        $_SESSION['loggedIn_email'] = $row["email"];

        $_SESSION['isCustValid'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:../account.php");
    }
    else {
        session_destroy();
        die(header("location:../sign-in.php?loginFailed=true"));
    }
?>
