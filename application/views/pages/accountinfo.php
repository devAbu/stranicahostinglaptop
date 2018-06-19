<?php session_start();?>
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
<body action="connection.php">
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
                              <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
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
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">

		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> CATEGORIES</a>
			</li>
			
			<li class="subMenu" id = "smartphones"><a> SMARTPHONES</a>
				<ul class ="ulID" style="display:none;" data-submenu-id="smartphones">
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Samsung</a></li>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Apple</a></li>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Nokia</a></li>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Sony</a></li>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>LG</a>
				</ul>
			</li>
			<li class="subMenu" id="personal-computer"><a> PERSONAL COMPUTERS</a>
			<ul class ="ulID" style="display:none;" data-submenu-id="personal-computer">
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>HP</a></li>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>IBM</a></li>												
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Unknown Manufacturer</a></li>												
			</ul>
			<li class="subMenu" id = "notebooks"><a>NOTEBOOKS</a>
				<ul class ="ulID" style="display:none;" data-submenu-id="notebooks">
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>HP</a></li>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>IBM</a></li>												
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Lenovo</a></li>	
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Sony</a></li>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Samsung</a></li>												
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Microsoft</a></li>																						
			</ul>
			<li class="subMenu" id = "printers"><a>PRINTERS</a>
				<ul class ="ulID" style="display:none;" data-submenu-id="printers">
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Samsung</a>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>HP</a>
				</ul>	
			</li>
			<li class="subMenu" id = "equipment"><a>EQUIPMENT</a>
				<ul class ="ulID" style="display:none;" data-submenu-id="equipment">
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Earphones</a>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Keyboards</a>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Mouses</a>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Cables</a>
				<li class="unstyled-list-item"><a href="products.html"><i class="icon-chevron-right"></i>Phone Cases</a>
				</ul>	
			</li>
		</ul>
		</div>
	
	<?php
		include 'connect.php';
		
		$id = $_SESSION['id'];
		
		$query = "SELECT * FROM userinfo WHERE userid=$id";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result)){
			
			$title = $row["title"];
			$name = $row["firstname"];
			$surname = $row["lastname"];
			$gender = $row["gender"];
			$birthday = $row["dateofbirth"];
			$username = $row["username"];
			$street = $row["street"];
			$city = $row["city"];
			$email = $row["email"];
			$postcode = $row["postcode"];
			$country = $row["country"];
	?>
	
	<div class="span9" style="font-size:17px;">
		<div class="well">
		<h3>Account Info</h3>
		<hr>
		<div class="row">
		<h4>Personal Info</h4><br>
		
		<label class="col-md-6"for="title">Title:</label>
		<p class="col-md-6" ><?php echo $title; ?></p><br>
		<label class="col-md-6"for="title">Name:</label>
		<p class="col-md-6" ><?php echo $name; ?></p><br>
		<label class="col-md-6"for="title">Surname:</label>
		<p class="col-md-6" ><?php echo $surname; ?></p><br>
		<label class="col-md-6"for="title">Gender:</label>
		<p class="col-md-6" ><?php echo $gender; ?></p><br>
		<label class="col-md-6"for="title">Date Of Birth:</label>
		<p class="col-md-6" ><?php echo $birthday; ?></p><br>
		<label class="col-md-6"for="title">Username:</label>
		<p class="col-md-6" ><?php echo $username; ?></p><br>
		<label class="col-md-6"for="title">Email:</label>
		<p class="col-md-6" ><?php echo $email; ?></p><br>
		
		<h4 style="margin-top:90px;">Address Info</h4><br>
		<label class="col-md-6"for="title">Country:</label>
		<p class="col-md-6" ><?php echo $country; ?></p><br>
		<label class="col-md-6"for="title">City:</label>
		<p class="col-md-6" ><?php echo $city; ?></p><br>
		<label class="col-md-6"for="title">Postcode:</label>
		<p class="col-md-6" ><?php echo $postcode; ?></p><br>
		<label class="col-md-6"for="title">Street:</label>
		<p class="col-md-6" ><?php echo $street; ?></p><br>
		
		</div>
	</div>
	<?php
		}
	?>
	</div>
	</div>
</div>
</div>

<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="single-widget">
                        <h2 class="widget-title">Who We Are</h2>
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