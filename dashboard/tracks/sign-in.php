
<?php
    
    if (isset($_GET['loginFailed'])) {
        $message = "Email or Password is Incorrect.  Try Again";
        echo "<script type='text/javascript'>alert('$message');</script>";
		unset($_GET['loginfailed']);
		
    }
    else{
        session_start();
        session_destroy();
    
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Sign in page &amp; Sign in page for directcargo admin">
	<meta name="author" content="Code Viper || Johnnie Emmanuel">
	<meta name="keywords" content="signin,sign-in,sign,in,login,direct,cargo,directcargo,logistics,air, freight, dispatch,package,order,send,receive,international,forwarder">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="sign-in.php" />

	<title>Sign In &mdash; DIRECTCARGO &mdash; Freight Forwarder and International Logistics</title>


	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">


						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
								<div class="text-center mt-3">
											<a href="../../index.php" class="btn btn-lg btn-primary" style="background-color:darkcyan !important;">Click To Go Home</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									<form action="nne/customer_login_action.php" method="post">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="admin_email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="admin_password" placeholder="Enter your password" />
								
										</div>
										<div>
									
										</div>
										<div class="text-center mt-3">
											<button type="submit" value="submit"	class="btn btn-lg btn-primary">Sign in</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
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
		
	</main>

	<script src="js/app.js"></script>

</body>

</html>