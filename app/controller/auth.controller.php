<?php
require_once './app/view/auth.view.php';
require_once './app/model/user.model.php';


class authController
{
    private $model;
    private $view;


    public function __construct()
    {
        $this->model = new userModel();
        $this->view = new authView();
    }

    public function showFormLogin()
    {
        $this->view->showFormLogin();
    }

    public function validateUser()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);

        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SEESSION['IS_LOGGED'] = true;

            header("location: " . BASE_URL . "players");
        } else {
            $this->view->showFormLogin("El Usuario o contraseña no existe");
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("location: " . BASE_URL);
    }
}
