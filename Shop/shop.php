
<?php 
$title = 'Shop'

?>


<?php include('../header.php') ?>
	<?php 
    $db  = mysqli_connect('localhost', 'root', '', 'shop');
    if($db){
    	$query = 'SELECT * FROM `product`';

    	mysqli_query($db, $query);

    	$result = mysqli_query($db, $query);
    	while ($r = mysqli_fetch_assoc($result) ) { ?>
    <div class="product">
    	<img src="<php echo $r['image']; ?>">
    	<h3><?php echo $r['name']; ?></h3>
    	<p><?php echo $r['price']; ?></p>
        <p><?php echo $r['description']; ?></p>
        <a href=""> View Details</a>

    </div>
    <?php  
    	}
    }	
?>
    	
		<?php include('../footer.php') ?> 
    

