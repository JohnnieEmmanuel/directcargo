<?php 
  session_start();
  session_destroy();
    include "dashboard/tracks/nne/connect.php";
    if (isset($_GET['trackingid'])) {

      echo  '<script>alert("Tracking ID doesn\'t exist Try Again \!\!");</script>';
      echo 
      '<script>   
      if(typeof window.history.pushState == "function") {
          window.history.pushState({}, "Hide", "index.php");
      }
  </script>';
    }
  
   
	
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home &mdash; DIRECTCARGO &mdash; Freight Forwarder and International Logistics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Landing page&amp; Directcargo home page">
	<meta name="author" content="Code Viper || Johnnie Emmanuel">
	<meta name="keywords" content="direct,cargo,directcargo,landing,page,home,order,package,contact,logistics,air, freight, dispatch,package,order,send,receive,international,forwarder">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">DIRECTCARGO</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a onclick=" document.getElementById('aboutus').scrollIntoView()
">About Us</a></li>
                <li>
                  <a  onclick=" document.getElementById('services').scrollIntoView()">Services</a>
                  
                </li>
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="dashboard/tracks/account.php">Dashboard</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Worldwide Courier Services</h1>
            <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Get Quota!</a></p>

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section" id="aboutus">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-dollar"></span>
            </div>
            <h2 class="my-4 heading">QUALITY SERVICE</h2>
            <p>We provide quality logistics and transport services all over the globe at the best price.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Track Your Order</h2>
            <form action="dashboard/tracks/nne/gettracks.php"  method="post">
              <div class="form-group">
                <label for="fq_name">Tracking ID</label>
                <input type="text" required class="form-control btn-block" id="track_order" name="track_order" placeholder="Enter Tracking ID">
              </div>
              
              <div class="form-group">
                <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Track Now">  
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading">24/7 Support</h2>
            <p>Our customer service is always on standby to get your complaints and provide you with a solution .</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
       
        <div class="row mb-3 align-items-stretch" >
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2>
            
              <p>Packages are handled with 100% care by highly trained professionals. Storage and packaging are done under 100% good conditions in line with the logistics standards.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/blog_3.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Delivering Your Packages</a></h2>
            
              <p>Your goods are delivered to your doorstep by highly trained delivery professionals. We value your satisfaction.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 id="services" class="mb-0 text-primary">What We Offer</h2>
            <p class="color-black-opacity-5">We offer the following services.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div id="air" class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
              <div>
                <h3>Air Freight</h3>
                <p>There is a reason why companies that offer standard shipping and ones that offer express shipping alike rely on air freight to get the job done. The fastest and safest way to import and export goods internationally is by air.
                  But if your air freight forwarder is not reliable, the speed and convenience of air freight forwarding will not help you. That’s why choosing Direct Cargo as your air freight forwarder is such a smart business decision. Our level of personal attention and commitment to customer service is just what you need for reliable air freight operations. Direct Cargo’s air cargo specialists will assess your specific needs and customize our air services for your large-scale project or smaller express shipment door to door, terminal to terminal, or anything in-between.</p>
                <p class="mb-0"><a href="#"></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div id="ocean"  class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3>Ocean Freight</h3>
                <p>Ocean freight remains one of the most popular ways for companies to ship goods, and when you are shipping products to your commercial customers by sea, you need an ocean freight forwarder you can be sure you can rely on every single time you mark a package for shipment. That means you want the experts at Direct Cargo handling all of your ocean freight shipping. We handle everything from start to finish no matter where your goods need to go, so you can send your products overseas with total confidence.
                  Whether you’re importing or exporting, Direct Cargo has your international shipping covered port to port or door to door in full container loads or less than a container loads. Specializing in container shipping since 1985, Direct Cargo is your reliable choice for shipping FCL, LCL, and reefer (refrigerated) shipping containers around the globe.</p>
                <p class="mb-0"><a href="#"></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div id="ground"  class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3>Ground Shipping</h3>
                <p>Get your shipments where they need to go with Direct Cargo’s pick up and delivery services. We have a full range of truckers—small, medium, and large—to provide the flexibility to transport shipments of all sizes to and from ports all over the world.</p>
                <p class="mb-0"><a href="#"></a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  

    <div class="site-section block-13">
      <!-- <div class="container"></div> -->


      <div class="owl-carousel nonloop-block-13">
        <div>
          <a class="unit-1 text-center">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Storage</h3>
              <p class="px-5">Your goods are stored before shipment in the finest conditions in our state of the art strorage facilities.</p>
            </div>
          </a>
        </div>

        <div>
          <a class="unit-1 text-center">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Air Transports</h3>
              <p class="px-5">We offer over the air transportation of goods interstate and intercountry.</p>
            </div>
          </a>
        </div>

       
        <div>
          <a  class="unit-1 text-center">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Ship</h3>
              <p class="px-5">Utilizing the power of the safest mood  of transportation in providing high star rated courier services.</p>
            </div>
          </a>
        </div>
        <div>
          <a  class="unit-1 text-center">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Transports</h3>
              <p class="px-5">Goods are delivered to your door step by higly trained drivers.</p>
            </div>
          </a>
        </div>

        <div>
          <a  class="unit-1 text-center">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Ware Housing</h3>
              <p class="px-5">With over 1000 warehouses all over the globe, we store your goods in good conditons.</p>
            </div>
          </a>
        </div>


      </div>
    </div>


    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">More Services</h2>
            <p class="color-black-opacity-5">We Also Offer The Following Services</p>
          </div>
        </div>
        <div class="row align-items-stretch">
         


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div id="warehousing"  class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
              <div>
                <h3>Warehousing</h3>
                <p>The company you rely on for fast and efficient overseas shipping is also the only company you need for commercial warehousing. One of the major challenges for a number of businesses is finding reliable product warehousing services. When it is not cost-effective for you to run and manage your own warehouse, but you need a place to keep your goods until they are ready to ship, turn to Direct Cargo.
                  We are your complete one-stop-shop for international shipping. With our new warehousing services, your import and export goods are in good hands. We store your goods until you need them, handle fulfillment, Amazon FBA prep, and even have pick and pack services. We’ll take good care of your products from the moment we receive them until they are ready to go.</p>
               
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"> <span class="text-primary flaticon-car"></span> </div>
              <div>
                <h3>Cargo Insurance</h3>
                <p>Don’t leave your cargo unprotected. Cargo Insurance comes in different types with different exclusions and you need the proper insurance for your specific shipments. Direct Cargo’s friendly and professional staff will take the complications out of insuring your cargo so you can be assured that your imports and exports are covered in the event of loss or damage.</p>
            
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-car"></span></div>
              <div>
                <h3>Customs</h3>
                <p>Our house brokers stay up to date on all the latest rules and regulations on customs and communicate with customs officials, so you don’t have to. Our brokers will make sure you’re in ship shape from standard customs clearance, continuous bond, and ISF compliance to special customs work such as FDA and FWS.</p>
              
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

   
  
    
    <div class="site-section border-bottom">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="row">
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="images/icons/awards.png" alt="..." />
                <h1 class="text-primary mt-4">52</h1>
                <h5 class="text-800">Awards won</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="images/icons/states.png" alt="..." />
                <h1 class="text-primary mt-4">74+</h1>
                <h5 class="text-800">Countries covered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="images/icons/clients.png" alt="..." />
                <h1 class="text-primary mt-4">2m+</h1>
                <h5 class="text-800">Happy clients</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="images/icons/goods.png" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Goods delivered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="images/icons/business.png" alt="..." />
                <h1 class="text-primary mt-4">122M+</h1>
                <h5 class="text-800">Business hours</h5>
              </div>
            </div>
          </div>
      
        </div>

    </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#aboutus">About Us</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="reviews.html">Reviews</a></li>

                </ul>
              </div>
             
              
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Direct Cargo &copy;<script>document.write(new Date().getFullYear());</script> Powered by <a >CodeViper</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/12de7505b5.js" crossorigin="anonymous"></script>
  
    
  </body>
</html>