<?php
require_once __DIR__.'/config/bootstrap.php';
require_once __DIR__.'/app/Core/Application.php';

// Main entry point
$app = new App\Core\Application();
$app->run();
