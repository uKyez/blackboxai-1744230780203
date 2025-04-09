<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view->render('home', [
            'title' => 'Investment Analysis Dashboard'
        ]);
    }
}
