<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Moby Electronic d.o.o.</title>

	<!-- Latest compiled and minified CSS -->

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<script src="js/skriptaIndex.js"></script>

	<!-- Google Font -->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="social pull-left">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="action pull-right">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                    		<li><a href="delivery.php">Delivery</a></li>
                    		<li><a href="getToUs.php">About Us</a></li>
							<?php	
								if(isset($_SESSION['username']))
								{
									echo '<li><a href="logout.php">Logout</a></li>';
									echo '<li>Welcome, '.$_SESSION['username'].'</li>';
								}
								else
								{
									echo '<li><a href="loginform.php">Login</a></li>';
									echo '<li><a href="registrationForm.html">Register</a></li>';
								}
							 ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="header">
        <div class="container">
        
        <div class="navbar-header">

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header" aria-expanded="false">

                <span class="sr-only">Menu</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

              </button>

            </div>
        
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="logo">
                        <a href="index.php">
                            <img src="img/logic.png" alt="Moby Electronic">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-5">
                    <div class="search-form">
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                              <input type="text" id="search-field" class="form-control" placeholder="Search...">
                            </div>
                            <button type="submit" id="search" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="cart">
                        <div class="cart-icon">
                            <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <div class="cart-text">
                            SHOPPING CART
                            <br>
                            0 items - 0.00KM
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="mainBody">
    	<div class="container">
    		<div class="row">
    		<hr style="border-color:#ddd;">
			<h2 style="font-weight:bold;margin-top:20px;">Manufacturers</h2>
			<hr style="border-color:#ddd;">
    			<div class="span4" id="okvir" style="margin-top:20px;">
    				<a href="http://www.samsung.com/hr/" target=_blank>
						<img src="img/manufacturer1.png" alt="samsungLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir" style="margin-top:20px;">
    				<a href="https://www.sony.com/" target=_blank>
						<img src="img/manufacturer2.png" alt="sonyLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir" style="margin-top:20px;">
    				<a href="https://www.apple.com/" target=_blank>
						<img src="img/manufacturer3.png" alt="appleLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir">
    				<a href="http://www.huawei.com/en/" target=_blank>
						<img src="img/manufacturer4.png" alt="huaweiLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir">
    				<a href="https://www.nokia.com/en_int" target=_blank>
						<img src="img/manufacturer5.png" alt="nokiaLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir">
    				<a href="http://www.lg.com/hr" target=_blank>
						<img src="img/manufacturer6.png" alt="lgLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir">
    				<a href="https://global.blackberry.com/en/index" target=_blank>
						<img src="img/manufacturer7.png" alt="blackberryLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir">
    				<a href="https://www.cat.com/en_GB.html" target=_blank>
						<img src="img/manufacturer8.png" alt="catLogo">
					</a>
    			</div>
    			<div class="span4" id="okvir">
    				<a href="https://www3.lenovo.com/us/en/" target=_blank>
						<img src="img/manufacturer9.png" alt="lenovoLogo">
					</a>
    			</div>
			</div>
    	</div>
    </div>
    
    <div class="footerGet">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="single-widget">
                        <h2 class="widget-title">About Us</h2>
                        <div class="widget-inner">
                            <p>Offices: #1 Ulica park bb, G.Vakuf      
               #2 Sultan Ahmedova, Bugojno</p>
                            <p>Phone: + (387) 62 116 767</p>
                            <p>Email: m.hadzimehanovic@gmail.com</p>
                            <img src="img/payment.png" alt="payment">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-widget">
                        <h2 class="widget-title">Information</h2>
                        <div class="widget-inner">
                            <ul>
                                <li><a href="getToUs.php">Get to Us</a></li>
                                <li><a href="termsandconditions.php">Terms and Conditions</a></li>
                                <li><a href="privacypolicy.php">Privacy Policy</a></li>
                                <li><a href="delivery.php">Delivery Information</a></li>
                                <li><a href="manufacturers.php">Manufacturers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-widget">
                        <h2 class="widget-title">Our Services</h2>
                        <div class="widget-inner">
                            <ul>
                                <li><a href="">Shipping & Returns</a></li>
                                <li><a href="">Secure Shopping</a></li>
                                <li><a href="">International Shipping</a></li>
                            </ul>
                        </div>
                    </div>
               </div>
               
			   <?php
				if(isset($_SESSION['username']))
				{
					echo '<div class="col-md-3 col-sm-3">
                    <div class="single-widget">
					
                    <h2 class="widget-title">Your Account</h2>
                    <div class="widget-inner">
                        <ul>
                            <li><a href="accountinfo.php">Account Info</a></li>
                            <li><a href="">Orders</a></li>
                        </ul>
                    </div>
					</div>
					</div>';
				}
				?>
            </div>
        </div>
    </div>
</body>
</html>