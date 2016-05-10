<?php
namespace App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view->loadTemplate('home/index')->render(
            [
                "jaya"=> "JAYA",
                "code" => function () {
                    return strtoupper("code");
                }
            ]
        );
    }
}
