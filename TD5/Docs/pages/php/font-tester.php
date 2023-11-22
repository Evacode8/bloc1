<?php
$color=$_GET['color']??'black';
$size=$_GET['size']??'12';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php/font-tester.php">
    <title> Font-tester</title>
</head>
<body>
    <!-- récupération de l'url en php :  -->
<form action="<?=$_SERVEUR['PHP_SELF']?>">

    <input type="number" name="size">

</form>
<h1 style="color: <?=$color?>"> Font color</h1>
<ul>
<!-- rouge et 15  -->
  <li><a href="?color=red&size=15&message=message1">message1</a></li> 


  <li><a href="?color=green&size=30&message=message2">Message2</a></li>
  <li><a href="?color=blue&size=50&message=message3">Message3</a></li>
</ul>
<div style="color: <?=$color?>;font-size: <?=$size?>px"> Couleur + size</div>
</body>

</html>