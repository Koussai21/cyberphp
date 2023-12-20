<style>
    body {
        background: linear-gradient(180deg, #ffeb3b, #000000, #ffeb3b);
    }
    form {
        background: rgba(0, 0, 0, 0.7); /* Fond noir semi-transparent */
        padding: 20px; /* Marge interne pour le formulaire */
        border-radius: 10px; /* Coins arrondis */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Ombre légère */
    }
    form label {
        display: block; /* Chaque label sur une nouvelle ligne */
        margin-bottom: 5px; /* Espacement entre les labels */
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
<<<<<<< HEAD
    h2{
                color:white;
                font-family:sans-serif;
            }
=======
>>>>>>> 51c6c4314d7d44b7eb2e8201aab04b81dfe52278

</style>

<h2>Inscription</h2>

<form action="" method="post">

    <input type="text" name="nom" placeholder="nom"><br>
    <input type="text" name="prenom" placeholder="prenom"><br>
    <input type="text" name="tel" placeholder="tel"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="mdp" placeholder="password"><br>
    <button>S'inscrire</button>

</form>