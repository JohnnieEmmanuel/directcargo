<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "nne/connect.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Create New Admin, Admin Endpoint&amp; Directcargo admin dashboard">
	<meta name="author" content="Code Viper || Johnnie Emmanuel">
	<meta name="keywords" content="create,new, admintracking,trackingID, order,admin,direct,cargo,directcargo,logistics,air, freight, dispatch,package,order,send,receive,international,forwarder">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="trackingdetails.php" />

	<title>Create Admin &mdash; DIRECTCARGO &mdash; Freight Forwarder and International Logistics</title>


	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" >
          <span class="align-middle">DirectCargo</span>
        </a>
	

		</nav>

		<div class="main">
			


			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Sign Up a New Admin</h1>
		
					</div>
					
					
						
					<div class="row">
						
						<div class="col-lg-6 col-md-12  col-sm-12 card ">
						<form action="nne/newadmin.php" method="POST">
						
                        <div class="col-lg-6 " >
								<label class="card-title mb-0">Admin Full Name</label>

									<input type="text" name="admin_fullname" class="form-control  " required>
							</div>
                           
						
							<div class="col-lg-6 " >
								<label class="card-title mb-0">Admin Email</label>

									<input type="email" name="admin_email" class="form-control  " required>
							</div>
                            <div class="col-lg-6 " >
								<label class="card-title mb-0">Admin Phone Number</label>

									<input type="text" name="admin_phonenumber" class="form-control  " required>
							</div>
                            <div class="col-lg-6 " >
								<label class="card-title mb-0">Admin password</label>

									<input type="password" name="admin_password" class="form-control  " required>
							</div>
                            <div class="col-lg-6 " >
								<label class="card-title mb-0">Confirm password</label>

									<input type="password" name="admin_confirm_password" class="form-control  " required>
							</div>
							<hr>
							<div class="col-lg-6 " style="display: inline-flex;" >
							
							<button type="submit" class="btn btn-primary" >Admin SignUp</button>						
						</div>
								
							</div>
</form>
					</div>
					
					

						</div>
					</div>

				</div>
			</main>

		</div>
		<footer class="footer">
				<div class="container-fluid">
				<div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Direct Cargo &copy;<script>document.write(new Date().getFullYear());</script>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
				</div>
			</footer>
	</div>

	<script src="js/app.js"></script>

</body>

</html>