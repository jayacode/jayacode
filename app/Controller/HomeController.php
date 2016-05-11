<?php
namespace App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view(
            'home/index',
            [
                "jaya"=> "JAYA",
                "code" => function () {
                    return strtoupper("code");
                }
            ]
        );
    }
}
