<?php
namespace App\Core;

class Application
{
    protected $router;
    protected $db;
    protected $config;

    public function __construct()
    {
        $this->loadConfig();
        $this->setupDatabase();
        $this->setupRouter();
    }

    protected function loadConfig()
    {
        $this->config = [
            'database' => require CONFIG_PATH . 'database.php'
        ];
    }

    protected function setupDatabase()
    {
        try {
            $dbConfig = $this->config['database'];
            $this->db = new \PDO(
                "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}",
                $dbConfig['username'],
                $dbConfig['password']
            );
        } catch (\PDOException $e) {
            // Log error but continue without database connection
            error_log('Database connection failed: ' . $e->getMessage());
            $this->db = null;
        }
    }

    public function getDatabase()
    {
        return $this->db;
    }

    protected function setupRouter()
    {
        global $router;
        $this->router = $router ?? new Router();
    }

    public function run()
    {
        $this->router->dispatch();
    }
}
