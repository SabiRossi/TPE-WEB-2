<?php
class authHelper
{
    public function checkedLogin()
    {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("location: " . BASE_URL);
            die();
        }
    }
}
