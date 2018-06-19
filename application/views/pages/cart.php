<?php 
	include 'connect.php';
	session_start(); 
?>
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

	<!-- Google Font -->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/responsive.css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
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
    
<div id="mainBody" style="position:fixed;height:100%;width:100%;">
	<div class="container">
		<h2>Shopping Cart</h2>
		<div class="table-responsive">
		<table id="tablecart" class="table table-bordered">
		<tr>
		<th width="40%">Product Name</th>
		<th width="10%">Quantity</th>
		<th width="20%">Price Details</th>
		<th width="15%">Order Total</th>
		<th width="5%">Action</th>
		</tr>
		<?php
		if(!empty($_SESSION["cart"]))
		{
			$total = 0;
			foreach($_SESSION["cart"] as $keys => $values)
			{
				?>
				<tr>
				<td><?php echo $values["item_name"]; ?></td>
				<td><?php echo $values["item_quantity"] ?></td>
				<td><?php echo $values["product_price"]; ?></td>
				<td><?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
				<td><a href="processcart.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
				</tr>
				<?php 
				$total = $total + ($values["item_quantity"] * $values["product_price"]);
			}
			?>
			<tr>
			<td colspan="3" align="right"><strong>Total</strong></td>
			<td align="right">$ <?php echo number_format($total, 2); ?></td>
			
			<?php
			if(isset($_SESSION['username'])){  ?>
			
			<td><input type="submit" class="place-order" id="<?=$total;?>" value="Place Order!"></td>
			
			<?php
			}
			else{
				echo'<td><input type="submit" class="login" value="Place Order!"></td>';
			}
			?>
			</tr>
			<input type="hidden" id="hidden_name" value="<?php echo $values["item_name"]; ?>">
			<input type="hidden" id="hidden_quantity" value="<?php echo $values["item_quantity"]; ?>">
			
			
			<?php
			if(isset($_SESSION['username'])){
				$un = $_SESSION['username'];
				$query = "SELECT * FROM userinfo WHERE username='$un'";
				$result = mysqli_query($con, $query);
				
				/*if (!$result) {
				printf("Error: %s\n", mysqli_error($con));
				exit();
				}*/
				
				while($row = mysqli_fetch_array($result)){
					$id = $row['userid'];
					$name = $row['firstname'];
					$surname = $row['lastname'];
					$street = $row['street'];
					$city = $row['city'];
					$country = $row['country'];
				}
				echo '<input type="hidden" id="user_id" value="'.$_SESSION["id"].'">';
				echo '<input type="hidden" id="firstname" value="'.$name.'">';
				echo '<input type="hidden" id="lastname" value="'.$surname.'">';
				echo '<input type="hidden" id="user_street" value="'.$street.'">';
				echo '<input type="hidden" id="user_city" value="'.$city.'">';
				echo '<input type="hidden" id="user_country" value="'.$country.'">';
			}
		}
		?>
		</table>
	</div>
</div>

</body>
</html>