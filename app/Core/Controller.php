<?php
namespace App\Core;

class Controller
{
    protected $db;
    protected $view;

    public function __construct()
    {
        global $app;
        $this->db = $app->getDatabase();
        $this->view = new View();
        
        if (!$this->db) {
            error_log('Warning: No database connection available');
        }
    }

    protected function jsonResponse($data, $statusCode = 200)
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}
