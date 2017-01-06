<?php
use Interop\Container\ContainerInterface;

/**
 * Class BaseController
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

    /**
     * @return \Slim\Views\PhpRenderer
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param \Slim\Views\Twig $view
     */
    public function setView(\Slim\Views\Twig $view)
    {
        $this->view = $view;
    }
}