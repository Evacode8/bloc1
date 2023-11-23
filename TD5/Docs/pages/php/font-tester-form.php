
<!-- 
// cf payload pour voir la méthode utilisée 
// if(empty($_GET)){
//     die("Erreur: rien dans le GET")
// }

// extract($_GET);
// version courte de la fonciton 

// if(isset($_GET ['sizeVar'])){
//     $up=($GET_['sizeVar']=='+')?10:-10;
//     $size+$up;
// }
// if (condition )
// else

// ()? retourné si vrai : si c est faux 
?> -->



<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs requis sont remplis
    if (isset($_POST['message']) && isset($_POST['taille']) && isset($_POST['couleur'])) {
        $message = $_POST['message'];
        $taille = $_POST['taille'];
        $couleur = $_POST['couleur'];

        // Afficher le résultat
        echo "<p>Message : $message</p>";
        echo "<p>Taille : $taille</p>";
        echo "<p>Couleur : <span style='font-size: {$taille}px; color: $couleur;'>$message</span></p>";
    } else {
        echo "<p>Tous les champs doivent être remplis.</p>";
    }
}
?>

<!-- Formulaire HTML -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="message">Message :</label><br>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

    <label for="taille">Taille :</label>
    <input type="number" id="taille" name="taille" min="1" max="100"><br><br>

    <label for="couleur">Couleur :</label>
    <input type="color" id="couleur" name="couleur"><br><br>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
