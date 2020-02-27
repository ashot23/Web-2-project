<?php include('../header.php') ?>



<!-- <div class="child12">
<img class="img1" src="../Home/Img/Windows_10.png" >
</div> -->



<div class="main2">
<div class="child5">

<form method="POST"   action="../Registered/Baza.php">
<input tabindex="-1" style="font-style: italic" name="name" class="name" placeholder="Անուն" type="text"></input><br>
<input style="font-style: italic" name="firstname" class="frstname" placeholder="Ազգանուն" type="text"></input><br>
<input style="font-style: italic" name="password" class="password" placeholder="Գաղտնաբառ" type="password"></input><br>
<div class="pol">
    <input name="pol"  value="Աարական" class="rad1" type="radio"><span class="male" > Արական</span><input name="pol" value="Իգական" class="rad2" type="radio"><span class="famale">Իգական</span> <br>
</div>
<br>
<div class="data1">
<select name="data" class="data">
<?php 
for ($i=2020; $i >=1905 ; $i--) { ?>
   <option  ><?php echo $i."թ"; ?>  </option>

<?php } ?>

?>

</select>

<select name="months" class="data">
<?php 
$amis = array(
'հունվար',
'փետրվար' ,
'մարտ', 
'ապրել',
'մայիս',
'հունիս',
'հուլիս', 
'օգոստոս',
'սեպտեմբեր',
'հոկտեմբեր',
'նոյեմբեր',
'դեկտեմբեր'
);


for ($i=0; $i <12 ; $i++) { ?>
   <option>  <?php echo $amis[$i]; ?> </option>
    
<?php } ?>

?>

</select>


</div>


<input style="font-style: italic" name="email" class="email" placeholder="Email" type="email"></input><br>
<textarea class="textare" placeholder="Մեկնաբանություն" name="Text"  cols="55" rows="10"></textarea><br>
<input style="font-style: italic" class="sumb" name="Reg" value="Register" onclick="reg()" type="submit">
</form>

</div>
<div class="child6">
    <iframe class="ifram" width="560" height="315" src="https://www.youtube.com/embed/hAJm6RYTIro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>

</div>
</div>


<?php include('../footer.php') ?>