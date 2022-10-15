<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class positionView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new smarty();
    }

    public function showPositions($positions, $error)
    {
        $this->smarty->assign('positions', $positions);

        $this->smarty->assign('error', $error);

        $this->smarty->display('categories.list.tpl');
    }


    public function editPositionById($position)
    {
        $this->smarty->assign('position', $position);

        $this->smarty->display('form_edit_categorie.tpl');
    }
}
