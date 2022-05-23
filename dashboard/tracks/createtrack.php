<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "nne/validate-customer.php";
    include "nne/connect.php";

	
   

    if (isset($_SESSION['loggedIn_cust_id'])) {
        $id = $_SESSION['loggedIn_cust_id'];
		$email = $_SESSION['loggedIn_email'];

        $sql1 = "SELECT * FROM admincontrol WHERE admin_id=".$id;
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
    

        $sql0 = "SELECT * FROM tracks WHERE admin_id ='$id' ORDER BY track_no DESC";
        $result0 = $conn->query($sql0);
        $row0 = $result0->fetch_assoc();

       
    }
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Create Track Order, Admin Endpoint&amp; Directcargo admin dashboard">
	<meta name="author" content="Code Viper || Johnnie Emmanuel">
	<meta name="keywords" content="create,new,track,tracking,trackingID, order,admin,direct,cargo,directcargo,logistics,air, freight, dispatch,package,order,send,receive,international,forwarder">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="createtrack.php" />

	<title>Create Track &mdash; DIRECTCARGO &mdash; Freight Forwarder and International Logistics</title>


	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>


<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">DirectCargo</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="account.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					

		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
               <span  style="color:#e65100;"> <?php echo $row1["admin_email"] ?> </span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								
								<a class="dropdown-item" href="nne/logout_action.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Create New Track</h1>
		
					</div>
					
					
						
					<div class="row">
						
						<div class="col-lg-6 col-md-12  col-sm-12 card ">
						<form action="nne/newtrack.php" method="POST">
						<?php 
							 $t="DC".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
						 $tracking_id= str_shuffle($t);
?>
							
							<div class="col-lg-6">
							<label class="card-title mb-0">Tracking ID</label>
							<input type="text"  readonly name="tracking_id"  value="<?php echo $tracking_id ?>"  placeholder="<?php echo $tracking_id ?>" class="form-control text-uppercase" >
							</div>
							<div class="col-lg-6 " >
								<label class="card-title mb-0">Receivers Name</label>

									<input type="text" name="r_name" class="form-control text-uppercase " required>
							</div>
							<div class="col-lg-6">
							<label for="r_address" class="card-title mb-0">Receivers  Address</label>
							<input type="text" name="r_address"	id="r_address" class="form-control text-uppercase w-100">
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Receivers Country</label>
							<input type="text" name="r_country" class="form-control text-uppercase" required>
							</div>
							<div class="col-lg-6 ">
							<label class="card-title mb-0">Receivers Phone Number</label>
							<span class="d-flex">
							<label class="card-title " style="margin-right: 2px; margin-top: 10px;"style="width: 10%;">+</label>
							<input type="number" min="1" placeholder="x" name="country_code" class="form-control text-uppercase" required style="width: 30%;">
							<input type="" name="r_phone_number" class="form-control text-uppercase" required style="width: 80%;" placeholder="(x)xxx-xxx-xx">
							</span>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Senders Name</label>
							<input type="text" name="s_name" class="form-control text-uppercase" required>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Senders Address</label>
							<input type="text" name="s_address" class="form-control text-uppercase" required>
							</div>
							
							
							<div class="col-lg-6">
							<label class="card-title mb-0">Senders Country</label>
							<input type="text"  name="s_country" class="form-control text-uppercase" required>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Current Location</label>
							<input type="text"  name="c_location" class="form-control text-uppercase" required>
							</div>
						
							</div>
							<div class="col-lg-6 col-md-12  col-sm-12 card ">
							<div class="col-lg-6 " >
								<label class="card-title mb-0">Package Items</label>

									<input type="text" name="p_description"	class="form-control text-uppercase" required>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Item Weight</label>
							<input type="number" min="5" name="weight" class="form-control text-uppercase" required>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Delivery Date</label>
							<input type="date" name="d_date" class="form-control text-uppercase" required>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Ship Date</label>
							<input type="date" name="s_date" class="form-control text-uppercase" required>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Quote Price</label>
							<input type="number" min="10" name="q_price" class="form-control text-uppercase" required>
							</div>
						
							<div class="col-lg-6">
							<label class="card-title mb-0">Freight Type</label>
							<select name="freight_type" class="form-select mb-3">
          <option value="Air">Air</option>
          <option value="Ocean">Ocean</option>
          <option value="Land">Land</option>
        </select>
							</div>
							<div class="col-lg-6">
							<label class="card-title mb-0">Status</label>
							<select name="status" class="form-select mb-3">
          <option value="shipped">Shipped</option>
          <option value="dispatched">Dispatched</option>
          <option value="delivered">Delivered</option>
        </select>
							</div>
							<div class="col-lg-6 " style="display: inline-flex;" >
							
							<button type="submit" class="btn btn-primary" >Create Track Order</button>						
						</div>
								
							</div>
</form>
					</div>
					
					

						</div>
					</div>

				</div>
			</main>


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
			</footer>		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>