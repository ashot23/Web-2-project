
<?php 
$title = 'Admin';
$icon = 'Img/Ico.png';
?>


<?php include('../header.php') ?>

<div class="crund">


<div class="Add">
<!-- <div class="main2"> -->
<p align = 'center' class="add1">Add </p>
<div class="child5">
<form method="POST" action="../action.php">
<input class="name" type="text" name="name" placeholder="name"><br>
<input class="frstname" type="number" name="price" placeholder="price"><br>
<input   class="email" type="text" name="image" placeholder="image name (./Img/image name.jpg)"><br>
<textarea class="textare" name="description" placeholder="description" name="Text"  cols="50" rows="10"></textarea><br>
 <input class="sumb" name="Add" value="Add"  type="submit" name="submit">
</form>
</div>
</div>

<div class="Update">
<p align = 'center' class="add1">Update </p>
<div class="child5">
<form method="POST" action="../Update.php">
<input class="frstname" type="number" name="id" placeholder="Id  (Required)"><br>
<input class="name" type="text" name="name" placeholder="change name"><br>
<input class="frstname" type="number" name="price" placeholder="change price"><br>

<input class="email"  type="text" name="image" placeholder="change image name (./Img/image name.jpg)"><br>
<textarea class="textare" name="description" placeholder="change description" name="Text"  cols="50" rows="10"></textarea><br>
 <input class="sumb" name="Update" value="Update"  type="submit" name="submit">
</form>
</div>
</div>
	
<div class="Del">
<p align = 'center' class="add1">Delete </p>
<div class="child5">
<form method="GET" action="../Delet.php">
<input class="frstname" type="number" name="id" placeholder="Id  (Required)"><br>
 <input class="sumb" name="Update" value="Del"  type="submit" name="submit">
</form>
</div>
</div>

</div>
<h2 align = 'center'>Table of product</h2>
<div class="tab">
<table border = 1>

<tr>
<?php 
	$db = mysqli_connect('localhost','root','','shop');
		if ($db) {
		$query = 'SELECT * FROM `product`';

		$result = mysqli_query($db, $query);
		echo '<td>Name</td>';
			while($r = mysqli_fetch_assoc($result)){ ?>
  <td><?php echo $r['name'] ?></td>
  <?php }
		}
	?>

</tr>

<tr>
<?php 
		if ($db) {
		$query = 'SELECT * FROM `product`';

		$result = mysqli_query($db, $query);
		echo '<td>Id</td>';
			while($r = mysqli_fetch_assoc($result)){ ?>
  <td><?php echo $r['id'] ?></td>
  <?php }
		}
	?>

</tr>

<tr>
<?php 
	$db = mysqli_connect('localhost','root','','shop');
		if ($db) {
		$query = 'SELECT * FROM `product`';

		$result = mysqli_query($db, $query);
		echo '<td>Price</td>';
			while($r = mysqli_fetch_assoc($result)){ ?>
  <td><?php echo $r['price'].'$' ?></td>
  <?php }
		}
	?>

</tr>

<tr>
<?php 
	$db = mysqli_connect('localhost','root','','shop');
		if ($db) {
		$query = 'SELECT * FROM `product`';

		$result = mysqli_query($db, $query);
		echo '<td>image</td>';
			while($r = mysqli_fetch_assoc($result)){ ?>

  <td class="nka"  > <img title="<?php echo $r['name'] ?>" class="nka" src="<?php echo $r['image'] ?>" alt="<?php echo $r['name'] ?>"> </td>
  <?php }
		}
	?>

</tr>

<tr>
<?php 
	$db = mysqli_connect('localhost','root','','shop');
		if ($db) {
		$query = 'SELECT * FROM `product`';
		echo '<td >Description</td>';
		$result = mysqli_query($db, $query);

			while($r = mysqli_fetch_assoc($result)){ ?>
  <td><?php echo $r['description'] ?></td>
  <?php }
		}
	?>

</tr>

</table>



</div>



		<?php include('../footer.php') ?>