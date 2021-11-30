<?php

namespace App\view;

class View
{
    private string $file;
    private string $title = 'lol';

    public function render($templatePath, $data = [])
    {
        $this->file = __DIR__.$templatePath.'.php';
        $content  = $this->renderFile($this->file, $data);

        $view = $this->renderFile(__DIR__.'/base.php', [
            'title' => $this->title,
            'content' => $content
        ]);
        
        echo $view;
    }
    
    private function renderFile(string $file, array $data = []  )
    {
        if (file_exists($file)) {
            extract($data);
            ob_start();
            
            require_once $file;

            return ob_get_clean();
        }
        
        //header('Location: index.php?route=notFound');
    }    
}