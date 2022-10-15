<?php
require_once './app/model/player.model.php';
require_once './app/view/player.view.php';
require_once './app/model/position.model.php';
require_once './app/helpers/auth.helper.php';
class playerController
{
    private $model;
    private $modelPositions;
    private $view;
    private $helper;

    public function __construct()
    {
        $this->model = new playerModel();
        $this->view = new playerView();
        $this->modelPositions = new positionModel();
        $this->helper = new authHelper();
    }

    public function showPlayers($error = null)
    {
        session_start();
        $player = $this->model->getAllPlayers();
        $positions = $this->modelPositions->getAllPositions();
        $this->view->showPlayers($player, $positions, $error);
    }

    public function addPlayer()
    { //trim($texto)
        if (!empty($_POST['player']) && trim($_POST['player']) && !empty($_POST['position']) && trim($_POST['position']) && !empty($_POST['team']) && trim($_POST['team']) && !empty($_POST['league']) && trim($_POST['league'])) {
            $player = $_POST['player'];
            $position = $_POST['position'];
            $team = $_POST['team'];
            $league = $_POST['league'];

            $id = $this->model->insertPlayer($player, $position, $team, $league);

            header("location: " . BASE_URL);
        } else {
            $this->showPlayers("Complete todos los campos");
        }
    }




    public function deletePlayer($id)
    {

        $this->model->deletePlayerById($id);
        header("location: " . BASE_URL . "players");
    }

    public function editPlayer($id)
    {

        $player = $this->model->getPlayer($id);

        $this->view->editPlayerById($player);


        //header("location: " . BASE_URL);
    }
    public function editDataPlayer()
    {

        if (!empty($_POST['nombre'] && $_POST['position'] && $_POST['team'] && $_POST['league'])) {
            $id = $_POST['id'];
            $player = $_POST['nombre'];
            $position = $_POST['position'];
            $team = $_POST['team'];
            $league = $_POST['league'];

            $this->model->editPlayerById($player, $position, $team, $league, $id);

            header("location: " . BASE_URL . "players");
        }
    }





    public function showFilterPlayers()
    {
        session_start();

        $position = $_POST['filter'];

        $players = $this->model->getPlayersByPosition($position);
        $this->view->showFilterPlayers($players);
    }

    public function showDetail($id)
    {
        session_start();
        $player_detail = $this->model->getPlayer($id);

        $this->view->showDetail($player_detail);
    }
}
