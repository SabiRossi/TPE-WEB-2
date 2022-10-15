<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class playerView
{
    private $smarty;


    public function __construct()
    {
        $this->smarty = new Smarty();
    }


    function showPlayers($players, $positions, $error)
    {

        $this->smarty->assign('players', $players);
        $this->smarty->assign('positions', $positions);
        $this->smarty->assign('error', $error);
        $this->smarty->display('players_list.tpl');
    }

    function editPlayerById($player)
    {
        $this->smarty->assign('player', $player);

        $this->smarty->display('form_edit.tpl');
    }
    function showFilterPlayers($players)
    {
        $this->smarty->assign('players', $players);
        $this->smarty->display('players_filters_list.tpl');
    }


    function showDetail($player_detail)
    {
        $this->smarty->assign('player_detail', $player_detail);
        $this->smarty->display('details.tpl');
    }
}
