<?php

namespace App\Core;

class Template
{
    protected $data;
    protected $name;

    function __construct($name, $data)
    {
        $this->name = $name;
        $this->data = $data;
    }

    function render()
    {
        $path = __DIR__ . '/../templates/' . $this->name;
        if (file_exists($path)) {
            extract($this->data);

            include $path;
        } else {
            echo 'Template at ' . $path . ' does not exist.';
        }
    }
}
