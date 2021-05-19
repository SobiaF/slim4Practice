<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/',  'HomePageController');
};

//    $app->get('/', function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        $model = $container->get('ListingsModel');
////        var_dump($model->getListings());
//        $model = $container->get('StatusesModel');
//        var_dump($model->getStatuses());
//        return $renderer->render($response, "index.php", $args);
//    });
//
//    $app->get('//', function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "newStaticFile.php", $args);
//    });
//};
