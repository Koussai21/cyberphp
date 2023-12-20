<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
        <style>
            body {
                    margin: 50px; /* Pour éliminer les marges par défaut du corps de la page */
                    padding: 50px; /* Pour éliminer le remplissage par défaut du corps de la page */
                    background: linear-gradient(to right, #ffeb3b, #000000, #ffeb3b); /* Dégradé jaune */
                    min-height: 100vh; /* Pour s'assurer que le dégradé couvre toute la hauteur de la fenêtre */
                }
            @font-face {
                font-family:GlitchGoblin;
                src: url(GlitchGoblin-2O87v.ttf);
            }
            h1{
                color:white;
                font-family:GlitchGoblin;
            }
        </style>
    </head>
    <body>
        <?php echo "<h1>Night city legends</h1>
        <h2>le lieu pour tout connaître sur les légendes de notre cité des rêves</h2>
        <p>Morgan Blackhand, Adam Smasher, Andrew Weiland, Johnny Silverhand ou encore David Martinez.
        les légendes de night city et leurs mystères en intriguent plus d'un.</p>
        <h3>Découvrez leurs histoires !</h3>
        "; ?>
    </body>
</html>