<?php
namespace App\Module;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class RestController
 * @package App\Module
 */
class RestController
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Front_Controller_Index constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
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
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function get(Request $request, Response $response, $args)
    {
        return $response;
    }

}