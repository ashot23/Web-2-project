
<?php 
$title = 'Product';
$icon = 'Img/Ico.png';
?>
<?php include('../header.php') ?>


            <div class="product">
            <?php 
		$db = mysqli_connect('localhost','root','','shop');
		if ($db) {
			$query = 'SELECT * FROM `product`';

			$result = mysqli_query($db, $query);

			while($r = mysqli_fetch_assoc($result)){ ?>
				
                                
<div id="<?php echo $r['id'] ?>"  class="prod1">
	<div class="imagediv">

	
	
	<img title="<?php echo $r['name'] ?>" class="img2" src="<?php echo $r['image'] ?>" alt='Microsoft'>
	</div>
<span><?php  echo $r['name']?></span>

<div class="text1">
    <p class="p1">
            <?php  echo $r['description']?>
        </p>

<hr>  
<a class="aVal" href="../Single/Single.php?id=<?php echo $r['id']; ?>">Go to BUY:</a>
<br>
<span class="value">Value <del><?php echo rand(160,300).'$'?> </del></span>
<span class="value1"> <?php echo $r['price'].'$' ?></span>
</div>
</div>

					
				

		<?php }
		}
	?>


</div>
<?php include('../footer.php') ?>