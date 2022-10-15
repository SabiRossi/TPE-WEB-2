<?php
class positionModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpeqatar;charset=utf8', 'root', '');
    }

    public function getAllPositions()
    {
        $query = $this->db->prepare("SELECT * FROM positions");

        $query->execute();

        $positions = $query->fetchAll(PDO::FETCH_OBJ);
        return $positions;
    }

    public function getPosition($id)
    {
        $query = $this->db->prepare("SELECT * FROM positions WHERE position_id = ?");
        $query->execute([$id]);
        $position = $query->fetch(PDO::FETCH_OBJ);

        return $position;
    }

    public function insertPosition($position)
    {
        $query = $this->db->prepare("INSERT INTO positions (position) VALUES (?) ");
        $query->execute([$position]);
    }

    public function deletePositionById($id)
    {
        $query = $this->db->prepare("DELETE FROM positions WHERE position_id = ? ");
        $query->execute([$id]);
    }

    public function editPositionById($position, $id)
    {
        $query = $this->db->prepare("UPDATE positions SET position = ? WHERE position_id = ? ");
        $query->execute([$position, $id]);
    }
}
