<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$config['displayErrorDetails'] = true;

$app = new \Slim\App(["settings" => $config]);
$container = $app->getContainer();
$container['view'] = function () {
    $view = new \Slim\Views\Twig(__DIR__ . '/', [
        //'cache' => __DIR__ . '/temp/cache'
    ]);

    return $view;
};

$app->add(function (Request $request, Response $response, $next) use (&$container) {

    /** @var \Psr\Http\Message\ResponseInterface $response */
    $response = $next($request, $response);
    return $response;
});


$app->get('/[{controller}[/{action}]]', function (Request $request, Response $response, array $args = null) {
    /** @var Slim\Views\Twig $view */
    $view = $this->view;
    /** @var Twig_Loader_Filesystem $viewLoader */
    $viewLoader = $view->getLoader();
    $controller = isset($args['controller']) && is_string($args['controller']) ? trim($args['controller']) : 'index';
    $action = isset($args['action']) && is_string($args['action']) ? trim($args['action']) : 'index';
    $className = "App\\Module\\Front\\Controller\\" . ucfirst($controller);
    /** @var App\Module\BaseController $obj */
    $obj = new $className($this);
    call_user_func(array($obj, lcfirst($action) . "Action"));

    $viewLoader->addPath(__DIR__ . '/module/Front/view/Index/');
    return $view->render($response, lcfirst($action) . '.twig', array('test' => 123));
})->setName('default');

$app->get('/api/v1/[{controller}]', App\Module\Api\Controller\RandomData::class)->setName('api');
$app->run();

