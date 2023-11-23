<!DOCTYPE html>
<html>
<head>
    <title>Tester les paramètres URL</title>
    <style>
        /* Styles pour la div du message */
        .message {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Tester les paramètres URL</h1>
    
    <?php
    // Vérification des paramètres passés dans l'URL
    $message = isset($_GET['message']) ? $_GET['message'] : ''; // Récupère le paramètre message ou laisse vide
    $size = isset($_GET['size']) ? $_GET['size'] : '12'; // Récupère le paramètre size ou met la taille par défaut à 12
    $color = isset($_GET['color']) ? $_GET['color'] : 'black'; // Récupère le paramètre color ou met la couleur par défaut à black

    // Affiche un message d'erreur si aucun paramètre n'est passé dans l'URL
    if (empty($message)) {
        echo '<div style="color: red;">Erreur : Aucun message n\'a été saisi.</div>';
    } else {
        // Affiche le message dans une div avec les paramètres passés dans l'URL
        echo '<div class="message" style="font-size: ' . $size . 'px; color: ' . $color . ';">' . $message . '</div>';
    }
    ?>

    <!-- Liens hypertextes pour afficher des messages différents -->
    <a href="?message=Message%20en%20rouge&size=15&color=red">Message en rouge (taille 15)</a><br>
    <a href="?message=Message%20en%20vert&size=30&color=green">Message en vert (taille 30)</a><br>
    <a href="?message=Message%20en%20bleu&size=50&color=blue">Message en bleu (taille 50)</a><br>

    <!-- Formulaire pour saisir message, color et size -->
    <form method="GET" action="">
        <label for="inputMessage">Message :</label>
        <input type="text" id="inputMessage" name="message"><br>
        
        <label for="inputColor">Couleur :</label>
        <input type="text" id="inputColor" name="color" value="black"><br>
        
        <label for="inputSize">Taille :</label>
        <input type="number" id="inputSize" name="size" value="12"><br>
        
        <input type="submit" value="Afficher le message">
    </form>

    <!-- Boutons pour augmenter ou diminuer la taille du message affiché -->
    <?php
    if (!empty($message)) {
        echo '<form method="GET" action="">';
        echo '<input type="hidden" name="message" value="' . $message . '">';
        echo '<input type="hidden" name="color" value="' . $color . '">';
        echo '<input type="hidden" name="size" value="' . $size . '">';
        echo '<input type="submit" name="increase" value="+">';
        echo '<input type="submit" name="decrease" value="-">';
        echo '</form>';
    }

    // Augmente ou diminue la taille du message
    if (isset($_GET['increase'])) {
        $size = intval($size) + 5;
    } elseif (isset($_GET['decrease'])) {
        $size = intval($size) - 5;
    }

    ?>
</body>
</html>
