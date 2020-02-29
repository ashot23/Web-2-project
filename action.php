<?php 

	$name = $_POST['name'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$description = $_POST['description'];

	$db = mysqli_connect('localhost', 'root', '', 'shop');

	if ($db) {
		$query = "INSERT INTO `product` (`name`, `price`, `image`, `description`) 
		VALUES ('$name', $price, '$image', '$description')";
		
		$result = mysqli_query($db, $query);
		if ($result) {
			echo 'Product is added';
		} else {
			echo 'ERROR!!!';
		}
	}
	?>

	<a href="index.php">Home</a>