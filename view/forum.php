<head>
        <title>Test PHP</title>
        <style>
            body {
                    margin: 50px; 
                    padding: 50px; 
                    background: linear-gradient(to right, #000000,#ff1111,#000000); 
                    min-height: 100vh;
                }
            h1{
                    color:white;
                }
            form {
                background: rgba(0, 0, 0, 0.7); /* Fond noir semi-transparent */
                padding: 20px; /* Marge interne pour le formulaire */
                border-radius: 10px; /* Coins arrondis */
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Ombre légère */
            }
            form input {
                margin-bottom: 10px; /* Espacement entre les champs de saisie */
                padding: 5px; /* Espacement interne pour les champs de saisie */
                display: flex;
                justify-content: center;
                align-items:center;
            }

            button {
                background-color: #ffeb3b; /* Couleur du bouton */
                color: #000; /* Couleur du texte du bouton */
                padding: 10px 15px; /* Espacement interne du bouton */
                border: none; /* Supprimer la bordure du bouton */
                border-radius: 5px; /* Coins arrondis du bouton */
                cursor: pointer;
            }

            button:hover {
                background-color: #000; /* Couleur du fond au survol du bouton */
                color: #ffeb3b; /* Couleur du texte au survol du bouton */
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
        <input type="text" name="Sujet" placeholder="Sujet"><br>
        <textarea name="Message" id="" cols="30" rows="10" placeholder="Votre Message"></textarea>
        <button>Poster</button>
        </form>

        <?php 
        foreach ($threads as $thread) { ?>
            <div>
                <h2><?= $thread['Sujet'] ?></h2>
                <p>Date de naissance: <?= $thread['Message']; ?></p>
            </div>
            <?php } ?>
    </body>