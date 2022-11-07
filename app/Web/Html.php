<?php

namespace App\Web;

class Html
{
    public function view($view, $params = [])
    {   
        $layout = $this->layout();
        $content = $this->renderOnlyView($view,$params);
        return str_replace('{{content}}',$content,$layout);
    }

    public function layout()
    {   
        ob_start();
        include_once __DIR__ . "/../../views/layouts/master.php";
        return ob_get_clean();
    }

    public function renderOnlyView($view,$params)
    {   
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once __DIR__ . "/../../views/{$view}.php";
        return ob_get_clean();
    }
}