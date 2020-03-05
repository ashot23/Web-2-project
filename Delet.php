
<html>
    <head>
        
    </head>
<body>
    <style>
    a{
font-size:20px;
border:1px solid gray;
text-shadow:1px 2px gray;
padding: 10px;
border-radius: 20px;
text-decoration: none;
    }
    a:hover{
        background-color: blue;
    }

    p{
font-size: 40px;

    }
    </style>

<?php


$db = mysqli_connect('localhost', 'root', '', 'shop');
if ($db) {
if ($_GET['id']) {
    $delet = 'DELETE FROM `product` WHERE `product`.`id` = '.$_GET['id'];
  
    $del = mysqli_query($db, $delet);
    if ($del) {
        echo '<p>Product is Del</p';
    } else {
        echo '<p>ERROR!!</p>';
    }
  }
}

?>
<br>
<a href="index.php"><--  Go Back </a>
</body>
</html>