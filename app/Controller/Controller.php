<?php
namespace App\Controller;

use JayaCode\Framework\Core\Application\Application;
use JayaCode\Framework\Core\Controller\Controller as BaseController;

/**
 * Class Controller
 * @package App\Controller
 */
class Controller extends BaseController
{
    /**
     * Controller constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
    }
}
