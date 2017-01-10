<?php
namespace App\Module;

use Interop\Container\ContainerInterface;
use Slim\Views\Twig;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class BaseController
 * @package App\Module
 */
class BaseController
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var \Slim\Views\Twig
     */
    protected $view;

    /**
     * Front_Controller_Index constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->view = $container->get('view');
    }

    public function __invoke(Request $request, Response $response, array $args = null)
    {
        switch ($request->getMethod()) {
            case 'GET':
                //todo: validation method
                return $this->get($request, $response, $args);
                break;
        }
        return $response;
    }

    /**
     * @return \Slim\Views\PhpRenderer
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param Twig $view
     */
    public function setView(Twig $view)
    {
        $this->view = $view;
    }
}