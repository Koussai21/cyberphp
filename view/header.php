<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
            display:flex;
            justify-content:space-between;
        }
        a {
            text-decoration: none;
            color: 	#02d7f2;
            font: sans-serif;
            display: block;
            padding: 10px 20px;
            border: 4px solid #02d7f2;
            border-radius: 0px;
            transition: border-radius 0.3s ease-in-out;
        }

        a:hover {
            border-radius: 0 10px 0 10px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php?page=accueil">Accueil</a>
            <a href="index.php?page=personnages">Personnages</a>
            <a href="index.php?page=blabla">Forum</a>
            <?php if(!isset($_SESSION['nom'])) { ?>
            <a href="?page=inscription">Inscription</a>
            <a href="?page=authentification">Authentification</a>
            <?php } else { ?>
            <p>Bonjour <?=@$_SESSION['nom']?></p>
            <a href="?page=exit">Se deconnecter</a> 
            <?php } ?>
        </nav>
    </header>
    <hr>