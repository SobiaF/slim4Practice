<?php


namespace App\Factories;

use Psr\Container\ContainerInterface;
use App\Models\StatusesModel;

class StatusesModelFactory
{
    public function __invoke(ContainerInterface $container): StatusesModel
    {
        // Get a DB connection
        $db = $container->get('db');
        // Pass that connection into a StatusesModel
        // Return the setup StatusesModel
        return new StatusesModel($db);
    }

}