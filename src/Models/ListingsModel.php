<?php


namespace App\Models;

use PDO;

class ListingsModel
{
    protected $db;

    public function __construct(PDO $db)
        //if not using PDO more than once can also instead of line 6 just add
        //public function __construct(/PDO $db) here instead
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