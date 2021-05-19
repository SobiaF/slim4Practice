<?php


namespace App\Controllers;


use App\Models\ListingsModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomePageController
{
    protected $model;
    protected $view;

    public function __construct(ListingsModel $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        var_dump($this->model->getListings());
        return $this->view->render($response, "index.php", $args);
    }

}