<?php
$color=$_GET['color']??'black';
$size=$_GET['size']??'12';
$message=$_GET['message']??'rien';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- name permet de récupérer la valeur de l'élément du côté serveur -->
<form method="GET" action="">
        <input type="text" placeholder="nom" name="sik" value="<?=$size?>">
        <input type="text" placeholder="prénom" name="prénom" value="<?=$color?>">
        <input type="text" placeholder="mail" name="mail">
        <input type="color">
        <textarea name="message" placeholder="votre message ici" cols="30" rows="10"><?=$message?></textarea>

        <input type="submit">
        <!-- <input type="button" id="envoyer"> Envoyer -->

    </form>

</body>
</html>