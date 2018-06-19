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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

	<!-- Google Font -->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/responsive.css">
	<script src="js/skriptaIndex.js"></script>
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
<div class="container">
<div class="Carousel">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/carousel1.jpg" alt="S8" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/carousel2.jpg" alt="Iphone7" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/carousel3.jpg" alt="Note8" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="img/carousel4.jpg" alt="C5" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="img/carousel5.jpg" alt="3310" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="img/carousel6.jpg" alt="A5" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="img/carousel7.jpg" alt="5s" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="img/carousel8.jpg" alt="Iph6" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
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
				require 'connect.php';
				
				$id = $_GET['id'];
				
				$query = "SELECT * FROM products WHERE product_id=$id";
				$result = mysqli_query($con, $query);
				
				while($row = mysqli_fetch_array($result)){
				
					$product_name = $row['product_name'];
					$price = $row['product_price'];
					$capacity = $row['product_capacity'];
					$color = $row['product_color'];
					$comment = $row['product_comment'];
					
					$textareaData = str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($comment,"\n\r"));
					
					$image = $row['product_image'];
					$fake = "C:fakepath";
					$replaced = str_replace($fake, "", $image);
					$image_src = "img/".$replaced;
			?>
			
        	<div class="row">
			<form method="post" action="processcart.php?action=add&id=<?php echo $id; ?>">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;border:1px solid silver; background-color:white;" src="<?php echo $image_src;?>" />
                </div>
                <div class="col-xs-5" style="background-color:white">
			
                    <h3 style="font-weight:bold;"><?php echo $product_name;?></h3>    
                    <hr style="border-color:#ddd;">
                    <h6 class="title-price"><small>Price</small></h6>
                    <h3 style="margin-top:0px; color:red;"><?php echo $price;?> KM</h3>
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
                        <div>
								<div class="attr" style="width:25px;background:<?php echo $color;?>;"></div>
                           <!-- <div class="attr" style="width:25px;background:#black;"></div>
                            <div class="attr" style="width:25px;background:rgb(175,176,180);"></div>
                            <div class="attr" style="width:25px;background:rgb(119,160,206);"></div>-->
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>CAPACITY</small></h6>                    
                        <div>
                            <div class="attr2"><?php echo $capacity;?> GB</div>
                           <!-- <div class="attr2">128 GB</div>-->
                        </div>
                    </div>  			
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>QUANTITY</small></h6>                    
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input name="quantity" id="quantity" value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>                
					<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>">
					<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>">
                    <div class="section" style="padding-bottom:20px; text-align:center">
                        <button class="btn-item" name="add">Add to Cart</button>
                    </div>                                        
                </div>                              
        
                <div style="float:right; background-color:white;margin-top:20px; margin-bottom:20px;" class="col-xs-9">
                    <ul class="menu-items">
                        <li style="margin-right:25px;cursor:pointer;"class="active">Product Details</li>
                       <!-- <li style="cursor:pointer;">Guarantee</li> -->
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <small>
                            <ul style="margin-top:30px; margin-bottom:30px;">
                                <li><?php echo $textareaData;?></li>
                            </ul>  
                        </small>
                    </div>
                </div>	
			</form>
            </div>
        </div>        
		<?php
		}
		?>
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