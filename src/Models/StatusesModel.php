<?php


namespace App\Models;

class StatusesModel
{
    protected $db;

    public function __construct(\PDO $db)
        //if not using PDO more than once can instead of   public function __construct(PDO $db) add
        //public function __construct(/PDO $db) here instead
    {
        $this->db = $db;
    }

    public function getStatuses(): array
    {
        $query = $this->db->prepare('SELECT * FROM `statuses`;');
        $query->execute();
        return $query->fetchAll();
    }
}