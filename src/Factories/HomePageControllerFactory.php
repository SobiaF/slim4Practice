<?php


namespace App\Factories;
use App\Controllers\HomePageController;
use Psr\Container\ContainerInterface;

class HomePageControllerFactory
{
    public function __invoke(ContainerInterface $container): HomePageController
    {
        $model = $container->get('ListingsModel');
        $view = $container->get('renderer');
        return new HomePageController($model, $view);
    }

}