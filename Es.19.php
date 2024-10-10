<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $domanda = "Qual è il pianeta più vicino al sole?";
            $risposte = array("Venere", "Terra", "Marte", "Mercurio", "Giove");
            echo "<p style='font-style: italic;'><strong>$domanda</strong></p>";
            for ($i = 0; $i < count($risposte); $i++) {
                echo "<input type='radio' name='risposta'><label>$risposte[$i]</label><br>";
            }

        ?>
        
    </body>
</html>