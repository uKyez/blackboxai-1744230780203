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
        
        ob_start();
        require VIEWS_PATH . $view . '.php';
        $content = ob_get_clean();
        
        require VIEWS_PATH . 'layouts/' . $this->layout . '.php';
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
