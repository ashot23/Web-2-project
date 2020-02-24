<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="Icon" href="//ssl.gstatic.com/classroom/favicon_black.png">
    <script>
    function reg(){

return alert("Շնորհավորումեմ դուք բարեհաջող գրանցվեցիք ")


    }
    
    </script>
</head>
<body>
    <div class="main">
        <a href="../Home/Home.php">
<div class="child1">
   <div title="Home" class="nkar">
        <img class="nkar1" src="Img/Windows.ico" alt="logo">
      
   </div>
</a>
   <div class="child0">

        <ul>
                <li> <a class="a1" href="../Home/Home.php">Home Page</a>|</li>
                <li><a target="_blank" class="a2"  href="../Product/Product.php"> Product</a> |</li>
                <li><a  class="a3" href="../Register/Register.php"> Register</a></li>
                
                       </ul>
   </div> 
    </div>
</div>

<div class="child12">
<img class="img1" src="../Home/Img/Windows_10.png" >
</div>



<div class="main2">
<div class="child5">

<form method="POST" action="../Registered/Baza.php">
<input name="name" class="name" placeholder="Անուն" type="text"></input><br>
<input  name="firstname" class="frstname" placeholder="Ազգանուն" type="text"></input><br>
<input  name="password" class="password" placeholder="Գաղտնաբառ" type="password"></input><br>
<div class="pol">
    <input name="pol" value="Աարական" class="rad1" type="radio"><span class="male" > Արական</span><input name="pol" value="Իգական" class="rad2" type="radio"><span class="famale">Իգական</span> <br>
</div>
<br>
<div class="data1">
<select name="data" class="data">
<?php 
for ($i=2020; $i >=1905 ; $i--) { ?>
   <option > <?php echo $i."թ"; ?> </option>

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
'օգօստոս',
'սեպտեմբեր',
'հոկտեմբեր',
'նոյեմբեր',
'դեկտեմբեր'
);


for ($i=0; $i <12 ; $i++) { ?>
   <option> <?php echo $amis[$i]; ?> </option>

<?php } ?>

?>

</select>


</div>


<input name="email" class="email" placeholder="Email" type="email"></input><br>
<textarea class="textare" placeholder="Մեկնաբանություն" name="Text"  cols="55" rows="10"></textarea><br>
<input  class="sumb" name="Reg" value="Register" onclick="reg()" type="submit">
</form>

</div>
<div class="child6">
    <iframe class="ifram" width="560" height="315" src="https://www.youtube.com/embed/hAJm6RYTIro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>

</div>
</div>


<div class="main5">
    <div class="you1">
        <a target="_blank" href="https://www.facebook.com/ashot.sargsyan.1848">
            <img class="face" src="Img/facebook.jpg">
            </a>
            <a target="_blank"  href="https://www.instagram.com/ashot.sargsyan.02/">
            <img  class="inst" src="img/instagram.png">
        </a>
        <a target="_blank"  href="https://twitter.com/H7BcwPqd63PEL8P">
            <img class="twit" src="Img/twiter.png" >
    </a>
    <a target="_blank"  href="https://www.youtube.com">
            <img class="you" src="Img/youtube.png">
</a>
    </div>
<div class="you2">
        ©designed by `Ashot:

</div>

    </div>
</body>
</html>