<style>
a{
    
font-size:20px;
border:1px solid gray;
text-shadow:1px 2px gray;
padding: 10px;
border-radius: 20px;
text-decoration: none;
    }
    a:hover{
        background-color: blue;
    }
p{

	margin-top: 20px;
	font-size: 60px;
}

</style>

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
			echo '<p>Product is added</p';
		} else {
			echo '<p>ERROR!!!</p>';
		}
	}
?>

<br>
<a href="./Product/Product.php"><- go to Back</a>

	

	
	
	