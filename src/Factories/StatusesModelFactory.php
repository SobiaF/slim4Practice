<?php


namespace App\Factories;

use Psr\Container\ContainerInterface;
use App\Models\StatusesModel;

class StatusesModelFactory
{
    public function __invoke(ContainerInterface $container): StatusesModel
    {
        $db = $container->get('db');
        return new StatusesModel($db);
    }

}