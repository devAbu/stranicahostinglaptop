<?php
    require 'connect.php';
	session_start();
	echo 'Welcome ' .$_SESSION['username'] . '</br>';
	$un = $_SESSION['username'];
	$query = "SELECT * FROM userinfo WHERE username = '$un'";
	$result = mysqli_query($con, $query, MYSQLI_STORE_RESULT);
	
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo 'Title: ' .$row['title'] . '</br>';
		echo 'Firstname: ' .$row['firstname'] . '</br>';
		echo 'Lastname: ' .$row['lastname'] . '</br>';
		echo 'Gender: ' .$row['gender'] . '</br>';
		echo 'Date of Birth: ' .$row['dateofbirth'] . '</br>';
		echo 'Username: ' .$row['username'] . '</br>';
		echo 'Street: ' .$row['street'] . '</br>';
		echo 'City: ' .$row['city'] . '</br>';
		echo 'Email: ' .$row['email'] . '</br>';
		echo 'Postcode: ' .$row['postcode'] . '</br>';
		echo 'Country: ' .$row['country'] . '</br>';
		/*$title = $row["title"];
		$name = $row["firstname"];
		$surname = $row["lastname"];
		$gender = $row["gender"];
		$birthday = $row["dateofbirth"];
		$username = $row["username"];
		$street = $row["street"];
		$city = $row["city"];
		$state = $row["state"];
		$postcode = $row["postcode"];
		$country = $row["country"];*/
	}
	}
?>