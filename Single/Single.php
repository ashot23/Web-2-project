
<?php 
$title = 'Single';

$db = mysqli_connect('localhost','root','','shop');
if ($db) {
  $query = 'SELECT * FROM `product` WHERE `id`='.$_GET['id'];

  $result = mysqli_query($db, $query);
  $r = mysqli_fetch_assoc($result);
  $icon = "$r[image]";
}
$icon = "$r[image]";
?>


<?php include('../header.php') ?>




          <div class="main1">


<?php 	
		$db = mysqli_connect('localhost','root','','shop');
		if ($db) {
			$query = 'SELECT * FROM `product` WHERE `id`='.$_GET['id'];

			$result = mysqli_query($db, $query);

			while($r = mysqli_fetch_assoc($result)){ ?>
			<div class="div1">
<img class="nkar0" title="<?php echo $r['name']; ?>" src="<?php echo $r['image']; ?>" >

</div>
        <div class="div2">
<p class="p1">
  <span style="font-size: 30px" ><?php echo $r['name']; ?> </span><br> 
  <span style="font-size: small" >by </span> <a class="MAC" href="https://www.macrosoftinc.com/">Microsoft</a> <br>
  <span style="font-size: 20px; color: brown" ><?php echo $r['price']; ?>$</span>
<br>This item does  ship to <b>Armenia.</b>  Please check other sellers who may ship internationally.
Ships from and sold by Software Media. <br><br>
<p class="p2">

<?php echo $r['description']; ?>

</p>


   
<!-- <input onclick="buy()" name="buy" class="buy" value="BUY" type="Submit"></input> -->
<a  onclick="buy()" class="buy" href="../Delet.php?id=<?php echo $_GET['id']; ?>">Buy:</a>
<form class="f1"   >
<input type="checkbox"> <b> 1 item </b></input>
<input type="checkbox"><b> 2 item </b> </input>

    </form>

</p>

</div>
<div class="child3">

   
        

</div>
          </div>
		<?php }
		}
	?>



          <?php include('../footer.php') ?>