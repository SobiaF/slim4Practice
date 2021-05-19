<?php


namespace App\Factories;

use Psr\Container\ContainerInterface;
use App\Models\ListingsModel;

class ListingsModelFactory
{
    public function __invoke(ContainerInterface $container): ListingsModel
    {
        $db = $container->get('db');
        return new ListingsModel($db);
    }
}