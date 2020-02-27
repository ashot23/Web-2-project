<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
echo "<pre>";
echo "GET - <br>";
print_r($_GET);
echo "POST - <br>";
print_r($_POST);
echo "<pre>";
	 ?>
<a href="admin.php?id=1&name=ipone">Product</a>
<form method="POST" action="action.php">
	<input type="text" name="product_name" placeholder="name"><br>
	<input type="text" name="product_price" placeholder="price"><br>
	<input type="text" name="product_image" placeholder="image"><br>
	<textarea name="product_description" placeholder="description"></textarea><br>
   <input type="submit" name="submit">
</form>
</body>
</html>