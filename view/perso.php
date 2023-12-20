<!DOCTYPE html>
<html>
<head>
    <title>Test PHP</title>
    <style>
    body {
        margin: 50px;
        padding: 50px;
        background: linear-gradient(to right, #ffeb3b, #000000, #ffeb3b);
        min-height: 100vh;
    }

    h1 {
        color: white;
<<<<<<< HEAD
        font-family: sans-serif;
=======
        font-family: impact;
>>>>>>> 51c6c4314d7d44b7eb2e8201aab04b81dfe52278
        border: 1px black;
    }

    p {
        color: white;
<<<<<<< HEAD
        font: sans-serif;
=======
        font: impact;
>>>>>>> 51c6c4314d7d44b7eb2e8201aab04b81dfe52278
    }

    .pannel {
        display: flex;
        align-items: center;
        border: solid 2px skyblue;
        margin-bottom: 20px;
        padding: 10px;
<<<<<<< HEAD
        font: sans-serif;
=======
>>>>>>> 51c6c4314d7d44b7eb2e8201aab04b81dfe52278
    }

    .infos {
        flex-grow: 1;
        padding: 10px;
        text-align: left;
    }

    .infos h2 {
        margin-top: 0;
<<<<<<< HEAD
        font: sans-serif;
=======
>>>>>>> 51c6c4314d7d44b7eb2e8201aab04b81dfe52278
    }

    .infos p {
        margin: 5px 0;
<<<<<<< HEAD
        font: sans-serif;
        color:white;
=======
>>>>>>> 51c6c4314d7d44b7eb2e8201aab04b81dfe52278
    }

    .pannel img {
        width: 216px;
        height: 268px;
        object-fit: cover;
        margin-right: 10px;
    }

    .div {
        border: solid 2px skyblue;
        margin-bottom: 20px;
        padding: 10px;
    }

    </style>
</head>
<body>
    <h1>Personnages</h1>
    <?php 
    foreach ($personnages as $personnage) { ?>
        <div class="pannel">
            <div class="infos">
                <h2><?= $personnage['nom'] ?></h2>
                <p>Date de naissance: <?= $personnage['date_naissance']; ?></p>
                <p>Domicile: <?= $personnage['domicile']; ?></p>
                <p>Âge: <?= $personnage['age']; ?></p>
                <p>Description: <?= $personnage['Description']; ?></p>
                <p>Cyberware: <?= $personnage['Cyberware']; ?></p>
            </div>
            <?php 
            if (!empty($personnage['image'])) { ?>
                <img src="<?= $personnage['image']; ?>" alt="Image de <?= $personnage['nom']; ?>">
            <?php } else { ?>
                <p>Aucune image disponible</p>
            <?php } ?>
        </div>
    <?php } ?>
</body>
</html>
