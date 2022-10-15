<?php
require_once './app/model/position.model.php';
require_once './app/view/categorie.view.php';
require_once './app/helpers/auth.helper.php';

class categorieController
{
    private $model;
    private $view;
    private $helper;
    public function __construct()
    {

        $this->model = new positionModel;
        $this->view = new positionView;
        $this->helper = new authHelper;
    }

    public function showPositions($error = null)
    {
        session_start();
        $positions = $this->model->getAllPositions();
        $this->view->showPositions($positions, $error);
    }

    public function addPosition()
    {
        if (!empty($_POST['position'] && trim($_POST['position']))) {
            $position = $_POST['position'];
            $id = $this->model->insertPosition($position);

            header("location: " . BASE_URL . "positions");
        } else {
            $this->showPositions("Complete todos los campos");
        }
    }

    public function deletePosition($id)
    {
        $this->model->deletePositionById($id);
        header("location: " . BASE_URL . "positions");
    }

    public function editPosition($id)
    {
        $position = $this->model->getPosition($id);

        $this->view->editPositionById($position);
    }

    public function editDataPosition()
    {
        if (!empty($_POST['position'])) {
            $id = $_POST['id'];
            $position = $_POST['position'];

            $this->model->editPositionById($position, $id);

            header("location: " . BASE_URL . "positions");
        }
    }
}
