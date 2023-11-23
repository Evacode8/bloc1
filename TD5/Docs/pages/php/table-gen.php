<!DOCTYPE html>
<html>
<head>
    <title>Générateur de Tableau</title>
</head>
<body>
    <h2>Créer un Tableau</h2>
    <form method="post">
        <label for="rows">Nombre de lignes :</label>
        <input type="number" name="rows" id="rows" min="1"><br><br>
        
        <label for="cols">Nombre de colonnes :</label>
        <input type="number" name="cols" id="cols" min="1"><br><br>
        
        <input type="submit" name="generate" value="Générer le tableau">
    </form>

    <hr>

    <?php
    if (isset($_POST['generate'])) {
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 0;
        $cols = isset($_POST['cols']) ? intval($_POST['cols']) : 0;

        if ($rows > 0 && $cols > 0) {
            echo "<h2>Tableau généré :</h2>";

            // Générer le tableau HTML
            echo '<textarea rows="10" cols="50"><table border="1">' . PHP_EOL;
            for ($i = 0; $i < $rows; $i++) {
                echo '<tr>' . PHP_EOL;
                for ($j = 0; $j < $cols; $j++) {
                    echo '<td>Cellule ' . ($i + 1) . '-' . ($j + 1) . '</td>' . PHP_EOL;
                }
                echo '</tr>' . PHP_EOL;
            }
            echo '</table></textarea>';

            // Afficher le tableau HTML
            echo '<br><br>';
            echo '<table border="1">';
            for ($i = 0; $i < $rows; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $cols; $j++) {
                    echo '<td>Cellule ' . ($i + 1) . '-' . ($j + 1) . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>Veuillez entrer un nombre valide de lignes et de colonnes.</p>';
        }
    }
    ?>
</body>
</html>

