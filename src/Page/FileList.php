<?php

namespace App\Page;

use App\Core\Page;

class FileList extends Page
{
    protected $template_name = 'FileList.php';
    protected $files;
    protected $source;

    function __construct($source)
    {
        $this->source = $source;
        $this->load_files();

        $this->template_data = [
            'files' => $this->files,
            'source' => $this->source
        ];
    }

    protected function load_files()
    {
        $path = __DIR__ . '/../data/datasources/' . $this->source;
        $this->files = array_diff(scandir($path), array('.', '..'));
    }
}
