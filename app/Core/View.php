<?php
namespace App\Core;

class View
{
    protected $data = [];
    protected $layout = 'default';

    public function render($view, $data = [])
    {
        $this->data = $data;
        extract($this->data);
        
        $viewPath = VIEWS_PATH . $view . '.php';
        $layoutPath = VIEWS_PATH . 'layouts/' . $this->layout . '.php';
        
        if (!file_exists($viewPath)) {
            throw new \Exception("View file not found: $viewPath");
        }
        if (!file_exists($layoutPath)) {
            throw new \Exception("Layout file not found: $layoutPath");
        }
        
        ob_start();
        require $viewPath;
        $content = ob_get_clean();
        
        require $layoutPath;
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    public function partial($partial, $data = [])
    {
        extract($data);
        require VIEWS_PATH . 'partials/' . $partial . '.php';
    }
}
