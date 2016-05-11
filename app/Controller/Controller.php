<?php
namespace App\Controller;

use JayaCode\Framework\Core\Controller\Controller as BaseController;
use JayaCode\Framework\Core\Http\Request;
use JayaCode\Framework\Core\Http\Response;

/**
 * Class Controller
 * @package App\Controller
 */
class Controller extends BaseController
{
    /**
     * Controller constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request = null, Response $response = null)
    {
        parent::__construct($request, $response);
    }
}
