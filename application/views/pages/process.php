<?php
	require 'connect.php';
	
	$action = $_POST['action'];
	
	/*if($action == "showdata")
	{
		$queryFetchAll = "SELECT * FROM products";
		$result2 = mysqli_query($con, $queryFetchAll);
		
				echo '<tr bgcolor="#ffd400">
					<td colspan="7" align="center"><h2>ITEMS</h2></td>
				</tr>
				<tr align="center">
					<th style="text-align:center; padding:5px;">Item ID</th>
					<th style="text-align:center;">Item Name</th>
					<th style="text-align:center;">Item Brand</th>
					<th style="text-align:center">Item Quantity</th>
					<th style="text-align:center;">Item Price</th>
					<th style="text-align:center;">Delete Item</th>
				</tr>
				
				<tr align="center">';
		
		while($row = mysqli_fetch_array($result2)){
			$id = $row['product_id'];
			$name = $row['product_name'];
			$brand = $row['product_brand'];
			$price = $row['product_price'];
			$quantity = $row['product_quantity'];
				
				echo '<td style="padding:2px;" align="center">'.$id.'</td>
				<td align="center">'.$name.'</td>
				<td align="center">'.$brand.'</td>
				<td align="center">'.$quantity.'</td>
				<td align="center">'.$price.' KM</td>
				<td align="center" class="delete" id="del_'.$id.'">Delete</td>
				</tr>';
		}
	}*/
	
	if($action == "delete")
	{
		$id = $_POST['id'];
		
		$queryDelete = "DELETE FROM products WHERE product_id=".$id;
		mysqli_query($con, $queryDelete);
	}
	
	else if($action=="add")
	{
		$name = $_POST['name'];
		$brand = $_POST['brand'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$img = $_POST['img'];
		$comment = $_POST['comment'];
		$capacity = $_POST['capacity'];
		$color = $_POST['color'];
		
		$queryAdd = ("INSERT INTO products (product_name, product_brand, product_quantity, product_price, product_capacity, product_color, product_image, product_comment) VALUES ('$name', '$brand', '$quantity', '$price', '$capacity', '$color', '$img', '$comment')");
		$result = mysqli_query($con, $queryAdd);
	}
	
	else if($action=="update")
	{
		$idUpdate = $_POST['id'];
		$nameUpdate = $_POST['name'];
		$priceUpdate = $_POST['price'];
		$quantityUpdate = $_POST['quantity'];
		$detailsUpdate = $_POST['comment'];
		
		$queryUpdate = "UPDATE products SET product_name='$nameUpdate', product_price='$priceUpdate', product_quantity='$quantityUpdate', product_comment='$detailsUpdate' WHERE product_id=".$idUpdate;
		mysqli_query($con, $queryUpdate);
	}
	
	else if($action=="placeorder")
	{
		$total = $_POST['total'];
		$name = $_POST['name'];
		$uid = $_POST['uid'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$quantity = $_POST['quantity'];
		
		$date = date("Y-m-d");
		$queryPlace = "INSERT INTO orders(user_id, name, surname, address, city, country, item, quantity, date, total) VALUES('$uid', '$firstname', '$lastname', '$street', '$city', '$country', '$name', '$quantity', '$date', '$total')";
		mysqli_query($con, $queryPlace);
	}
	
?>