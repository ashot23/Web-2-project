<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baza</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <div  >
<table class="main"  border="1">
<tr><td>Անուն</td><td>Ազգանուն</td><td>Գախտնաբառ</td><td>Սեռ</td><td>Թիվ</td><td>Ամիս</td><td>Հասցե(@)</td><td>մեկնաբանություն</td></tr>
<?php
 $sumb = $_POST['Reg'];
 if($sumb){

 echo "<tr class = 'tr1'><td>$_POST[name]</td><td>$_POST[firstname]</td><td>$_POST[password]</td><td>$_POST[pol]</td><td>$_POST[data]</td><td>$_POST[months]</td><td>$_POST[email]</td><td>$_POST[Text]</td></tr>" ;


 }
 else{

echo "Գրանցում չկա";


 }
 ?>

</table>




    </div>
    </body>
</html>