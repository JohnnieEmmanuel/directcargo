
<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "nne/validate-customer.php";
    include "nne/connect.php";

	
   
    if (isset($_SESSION['loggedIn_cust_id']) && isset($_GET['trackingid']) ) {
        $id = $_SESSION['loggedIn_cust_id'];
  $tid = $_GET['trackingid'];
		$email = $_SESSION['loggedIn_email'];

        $sql1 = "SELECT * FROM admincontrol WHERE admin_id=".$id;
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
    

        $sql0 = "SELECT * FROM tracks WHERE admin_id ='$id' AND tracking_id='$tid' ORDER BY track_no DESC";
        $result0 = $conn->query($sql0);
        $row0 = $result0->fetch_assoc();

       
    }
  
//    else{
//     echo '<script> window.location.replace("account.php"); </script>';

//    }

   
  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Track Order, Admin Endpoint&amp; Directcargo admin dashboard">
	<meta name="author" content="Code Viper || Johnnie Emmanuel">
	<meta name="keywords" content="tracking,trackingID, order,admin,direct,cargo,directcargo,logistics,air, freight, dispatch,package,order,send,receive,international,forwarder">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="trackingdetails.php" />

	<title>Tracking Details &mdash; DIRECTCARGO &mdash; Freight Forwarder and International Logistics</title>


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

				<ul class="sidebar-nav">
					
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
               <span style="color:#e65100;"> <?php echo $row1["admin_email"] ?> </span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								
								<a class="dropdown-item" href="nne/logout_action.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

		<div class="main">
			

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row">
						<div class="col-12 col-lg-6">
					
<!-- #e65100 -->
						<div class="card">
								<div class="card-header">
								<!-- <div class="wrapper">
  <div class="margin-area">
    <div class="dot one">1</div>
    <div class="dot two">2</div>
    <div class="dot three">3</div>
    <div class="dot four">4</div>
    <div class="progress-bar first"></div>
    <div class="progress-bar second"></div>
    <div class="progress-bar third"></div>
    <div class="message message-1">
     Picked up 
    <div>
    <div class="message message-2">Arrived at USPS facility<div>
    <div class="message message-3">Out for delivery<div>
    <div class="message message-4">Delivered<div>
    
  </div>
      <div class="status">Your item arrived at our USPS facility in COLUMBUS, OH 43218 on January 6, 2016 at 10:45 pm. The item is currently in transit to the destination.</div>
      <div class="status code">Here is your tracking code: <a href="#">123456789</a>
</div> -->
								</div>
								<div class="card-body">
								<div class="row progress-content upper-text">
                            <div class="col-md-3 col-xs-8 col-sm-2">
                                <p class="fs-12 no-margin">FROM</p>
                                <h2 class=" text-uppercase no-margin card-title mb-0" style="font-size: 12px; color: #e65100;"><?php echo $row0["from_country"]?></h2>
                            </div>
                            <div class="col-md-1 col-xs-8 col-sm-3">
                                <p class="fs-12 no-margin"></p>
                            </div>
                            <div class="col-md-3 col-xs-8 col-sm-4 text-center">
                                <p >Currently In</p>

                                
                                <h2 class="text-uppercase card-title mb-0" style=" font-size: 12px; color: #e65100;"><?php echo $row0["current_location"]?></h2>
                                

                            </div>
                            <div class="col-md-2 col-xs-8 col-sm-1 no-pad">
                                <p class="fs-12 no-margin"></p>
                            </div>
                            <div class="col-md-3 col-xs-8 col-sm-2 text-right">
                                <p class="fs-12 no-margin">TO</p>
                                <h2 class="fs-15 text-uppercase card-title mb-0" style="font-size: 12px; color: #e65100;"><?php echo $row0["to_country"]?></h2>
                            </div>
                        </div>

								</div>
							</div>




										</div>
						


										<div class="col-12 col-lg-6">
		


		<div class="row">
	<div class="col-12 col-lg-6 col-xxl-12 d-flex">
		<div class="card flex-fill" >
		
			<table class="table  text-white my-0" style="background-color: #4a8ff3;">
			
			
			
					<tbody>
					<tr>
					<td>Tracking ID:</td>
						<td class=" d-xl-table-cell text-uppercase"><?php echo $row0["tracking_id"]?></td>
					</tr>
					<tr>
				  <td >Package Content:</td>
				  <td class="d-xl-table-cell text-uppercase" ><?php echo $row0["goods_description"]?></td>
			  </tr>
			
			  <tr>
				  <td >Quote Price:</td>
				  <td class="d-xl-table-cell text-uppercase"><?php echo "$".$row0["amount"].".00"?></td>
			  </tr>  
			  <tr>
				  <td >Ship Date:</td>
				  <td class="d-xl-table-cell text-uppercase"><?php echo $row0["ship_date"]?></td>
			  </tr>  
			  <tr>
				  <td >Delivery Date:</td>
				  <td class="d-xl-table-cell text-uppercase"><?php echo $row0["delivery_date"]?></td>
			  </tr>    
			  <tr>
				  <td >Status:</td>
				  <td class="d-xl-table-cell text-uppercase"style="text-transform:uppercase;"><?php echo $row0["status"]?></td>
			  </tr>  
			  
			  <tr>
				  <td >Weight:</td>
				  <td class="d-xl-table-cell text-uppercase"><?php echo $row0["weight"]."kg"?></td>
			  </tr>  
			  <tr>
				  <td >Freight Type:</td>
				  <td class="d-xl-table-cell text-uppercase"><?php echo $row0["freight_type"]?></td>
			  </tr>  
						
					</tbody>
		   
				</table>
			   
		
		
		
		
				
			</div>
	</div>

</div>





		
	</div>

						<div class="col-12 col-lg-6">
		


							<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
							
								<table class="table text-white my-0" style="background-color: #4a8ff3;">
								
								
								
                                        <tbody>
                                          
											  
										<tr>
											<td>Receivers Address</td>
											<td class="  d-md-table-cell text-uppercase "><?php echo $row0["to_location"]?></td>

										</tr>
										<tr>
					<td >Receivers Email:</td>
					<td class=" d-md-table-cell  "><?php echo $row0["receiver_email"]?></td>
				</tr>
										<tr>
					<td >Receivers Phone No:</td>
					<td class=" d-md-table-cell text-uppercase"><?php echo $row0["receiver_phone_number"]?></td>
				</tr> 
				<tr>
										<td>Senders Address</td>
											<td class=" d-xl-table-cell text-uppercase"><?php echo $row0["from_location"]?></td>
										</tr>  
										<tr>
										<td>Senders Email</td>
											<td class=" d-xl-table-cell "><?php echo $row0["sender_email"]?></td>
										</tr>  
										<tr>
										<td>Senders Phone Number</td>
											<td class=" d-xl-table-cell text-uppercase"><?php echo $row0["sender_phone_number"]?></td>
										</tr>  
                                        </tbody>
                               
                                    </table>

</br>
									
								<table class="table text-white my-0" style="background-color: #4a8ff3;">
								
								
								
								<tbody>
								  
									  
								<tr>
									<td>Job Owner</td>
									<td class="  d-md-table-cell text-uppercase "><?php echo $row0["job_owner"]?></td>

								</tr>
								<tr>
			<td >Job Phone number</td>
			<td class=" d-md-table-cell  "><?php echo $row0["job_owner_phone"]?></td>
		</tr>
				 
								</tbody>
					   
							</table>
                                   
							</div>
						</div>
					
					</div>





							<div class="card">
								<div class="card-body">
								<form action="nne/update_order.php" method="GET" class="p-5 bg-white">
             

			 <div class="row form-group">
			   <div class="col-md-6 ">
				 <input type="text" name="location" class="form-control text-uppercase" placeholder="Current Location">
				 <input type="text" name="trackingid" value="<?php echo $row0["tracking_id"] ?>"	class="form-control text-uppercase" placeholder="Current Location" hidden readonly>

			   </div>
			   <div class="col-md-6">
			   <select name="status" class="form-select mb-3">
          <option value="shipped">Shipped</option>
          <option value="dispatched">Dispatched</option>
          <option value="delivered">Delivered</option>
        </select>

			   </div>
			   <div class="col-md-12">
				 <input type="submit" value="Update" class="btn btn-primary py-2 px-4 text-white"  style="background-color: #e65100;">
			   </div>
			 </div>

			
 
		   </form>
								</div>
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