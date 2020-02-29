
<?php 
$title = 'Admin';
$icon = 'Img/Ico.png';
?>


<?php include('../header.php') ?>
<body>
<div class="main2">
<div class="child5">
<form method="POST" action="../action.php">
<input class="name" type="text" name="name" placeholder="name"><br>
<input class="frstname" type="number" name="price"name placeholder="price"><br>
<input class="email" type="text" name="image" placeholder="image name"><br>
<textarea class="textare" name="description" placeholder="description" name="Text"  cols="55" rows="10"></textarea><br>
 <input class="sumb" name="Add" value="Add"  type="submit" name="submit">
</form>
</div>

</div>
    	
	

		<?php include('../footer.php') ?>