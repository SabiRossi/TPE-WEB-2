<?php
require_once './app/controller/player.controller.php';
require_once './app/controller/auth.controller.php';
require_once './app/controller/categorie.controller.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'players'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);



switch ($params[0]) {
    case 'login':
        $authController = new authController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new authController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new authController();
        $authController->logout();
    case 'players':
        $playerController = new playerController();
        $playerController->showPlayers();
        break;
    case 'positions':
        $categorieController = new categorieController();
        $categorieController->showPositions();
        break;
    case 'add_position':
        $categorieController = new categorieController();
        $categorieController->addPosition();
    case 'delete_position':
        $categorieController = new categorieController();
        $id = $params[1];
        $categorieController->deletePosition($id);
        break;
    case 'edit_position':
        $categorieController = new categorieController();
        $id = $params[1];
        $categorieController->editPosition($id);

    case 'update_position':
        $categorieController = new categorieController();
        $categorieController->editDataPosition();
        break;
    case 'add':
        $playerController = new playerController();
        $playerController->addPlayer();
        break;
    case 'detail':
        $playerController = new playerController();
        $id = $params[1];
        $playerController->showDetail($id);
        break;
    case 'delete':
        $playerController = new playerController();
        $id = $params[1];
        $playerController->deletePlayer($id);
        break;
    case 'edit':
        $playerController = new playerController();
        $id = $params[1];
        $playerController->editPlayer($id);
        break;
    case 'update':
        $playerController = new playerController();
        $playerController->editDataPlayer();
        break;
    case 'filter':
        $playerController = new PlayerController();
        $playerController->showFilterPlayers();
        break;
}
