<?php


namespace App\Models;

use PDO;

class StatusesModel
{
    protected $db;

    public function __construct(PDO $db)

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