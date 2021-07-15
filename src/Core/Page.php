<?php

namespace App\Core;

use App\Core\Template;

class Page
{
    protected $template_data;
    protected $template_name;

    function display()
    {
        $template = new Template($this->template_name, $this->template_data);
        $template->render();
    }
}
