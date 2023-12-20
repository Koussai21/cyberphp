<style>
    h1{
        display: flex;
        justify-content:center;
        align-items:center;
    }
</style>
<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if ($page == 'accueil') {
        require_once('view/accueil.php');
    } elseif ($page == 'personnages') {
        require_once('controller/persoController.php');
        $controller = new PersonnagesController();
        $controller->getPersos();
    } elseif ($page == 'blabla') {
        require_once('view/forum.php');
    }  elseif ($page == 'inscription') {
        require_once('controller/userController.php');
        $user = new UsersController;
        $user->setUser();
    } elseif ($page == 'authentification') {
        require_once('controller/userController.php');
        $user = new UsersController;
        $user->getAuthentification();
    } elseif ($page == 'exit') {
        $_SESSION=array();
    }
} else {
    // Gérer le cas où la clé "page" n'est pas définie dans la requête
    echo '<h1>Bienvenue Edgerunner</h1>';
}
?>
