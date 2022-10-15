<?php

class playerModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpeqatar;charset=utf8', 'root', '');
    }

    public function getAllPlayers()
    {
        $query = $this->db->prepare("SELECT pl.id, pl.nombre, pl.team, pl.league, po.position FROM players pl INNER JOIN positions po ON pl.position = po.position_id;");
        // $query = $this->db->prepare("SELECT * FROM players");
        $query->execute();

        $players = $query->fetchAll(PDO::FETCH_OBJ);
        return $players;
    }
    public function getPlayer($id)
    {
        $query = $this->db->prepare("SELECT pl.id, pl.nombre, pl.team, pl.league, po.position FROM players pl INNER JOIN positions po ON pl.position = po.position_id WHERE id = ?");

        $query->execute([$id]);
        $player = $query->fetch(PDO::FETCH_OBJ);

        return $player;
    }



    public function insertPlayer($player, $position, $team, $league)
    {
        $query = $this->db->prepare("INSERT INTO players (nombre, position, team, league) VALUES (?, ?, ?, ?)");
        $query->execute([$player, $position, $team, $league]);
    }

    public function deletePlayerById($id)
    {
        $query = $this->db->prepare("DELETE FROM players WHERE id = ? ");
        $query->execute([$id]);
    }


    public function editPlayerById($player, $position, $team, $league, $id)
    {
        $query = $this->db->prepare("UPDATE players SET nombre = ?, position = ?, team = ?, league = ? WHERE id = ? ");

        $query->execute([$player, $position, $team, $league, $id]);
    }

    public function getPlayersByPosition($position)
    {
        $query = $this->db->prepare("SELECT players.*,positions.* FROM players INNER JOIN positions ON players.position = positions.position_id WHERE players.position = ( ? )");
        $query->execute([$position]);
        $players = $query->fetchAll(PDO::FETCH_OBJ);
        return $players;
    }
}
