
<style>
a{
    
font-size:20px;
border:1px solid gray;
text-shadow:1px 2px gray;
padding: 10px;
border-radius: 20px;
text-decoration: none;
margin-bottom: 20px;
    }
    a:hover{
        background-color: blue;
    }

p{
margin-top: 20px;

}
</style>

<?php 
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$id = $_POST['id'];
$description = $_POST['description'];




	$db = mysqli_connect('localhost', 'root', '', 'shop');

	if ($db) {
            $query1 = "UPDATE `product` SET `description` = '$description' WHERE `product`.`id` = $id";
            $query2 = "UPDATE `product` SET `name` = '$name' WHERE `product`.`id` = $id";
            $query3 = "UPDATE `product` SET `price` = '$price' WHERE `product`.`id` = $id";
            $query4 = "UPDATE `product` SET `image` = '$image' WHERE `product`.`id` = $id";
		
        $result1 = mysqli_query($db, $query1);
        $result2 = mysqli_query($db, $query2);
        $result3 = mysqli_query($db, $query3);
        $result4 = mysqli_query($db, $query4);
		if ($result1||$result2||$result3||$result4) {
			echo 'Product is change';
		} else {
			echo '<p>ERROR!!!</p>';
		}
	}
?>

<br>
<a href="index.php"><- go to Back</a>
