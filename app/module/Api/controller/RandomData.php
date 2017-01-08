<?php
namespace App\Module\Api\Controller;

use App\Module\RestController;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class RandomData
 * @package Module\Api\Controller
 */
class RandomData extends RestController
{
    public function indexAction()
    {

    }

    public function get(Request $request, Response $response, $args) {

        return $response->withJson(array('test'=>123));
    }




}