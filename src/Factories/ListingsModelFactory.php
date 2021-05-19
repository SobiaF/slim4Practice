<?php


namespace App\Factories;

use Psr\Container\ContainerInterface;
use App\Models\ListingsModel;

class ListingsModelFactory
{
    public function __invoke(ContainerInterface $container): ListingsModel
    {
        // Get a DB connection
        $db = $container->get('db');
        // Pass that connection into a ListingsModel
        // Return the setup ListingsModel
        return new ListingsModel($db);
    }
}