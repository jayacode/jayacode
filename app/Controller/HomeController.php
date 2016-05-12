<?php
namespace App\Controller;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return $this->view(
            'home/index.twig',
            [
                "jaya"=> "JAYA",
                "code" => "CODE"
            ]
        );
    }
}
