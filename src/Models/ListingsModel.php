<?php


namespace App\Models;

use PDO;

class ListingsModel
{
    protected $db;

    public function __construct(PDO $db)

    {
        $this->db = $db;
    }

    public function getListings(): array
    {
        $query = $this->db->prepare('SELECT * FROM `listings`;');
        $query->execute();
        return $query->fetchAll();
    }
}