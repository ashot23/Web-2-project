<?php include('header.php') ?>
<body>


<form method="POST" action="action.php">
<input type="text" name="name" placeholder="name"><br>
<input type="number" name="price"name placeholder="price"><br>
<input type="text" name="image" placeholder="image name"><br>
<textarea name="description" cols="30" rows="10"></textarea>
 <input type="submit" name="submit">
</form>




	<?php 
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$desc = $_POST['description'];
    $db  = mysqli_connect('localhost', 'root', '', 'shop');
    if($db){

    	$query = "INSERT INTO `product` (`name`,`price`,`image`,`description`)
		VALUES ('$name',$price,'$image','$desc') ";

    	mysqli_query($db, $query);

    	// $result = mysqli_query($db, $query);
	}

?>
    	
	 
    

		<?php include('footer.php') ?>