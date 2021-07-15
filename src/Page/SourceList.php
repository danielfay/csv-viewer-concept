<?php

namespace App\Page;

use App\Core\Page;

class SourceList extends Page
{
    protected $template_name = 'SourceList.php';
    protected $sources;

    function __construct()
    {
        $this->load_sources();

        $this->template_data = [
            'sources' => $this->sources
        ];
    }

    protected function load_sources()
    {
        $sources_json = file_get_contents(__DIR__ . '/../data/sources.json');
        $this->sources = json_decode($sources_json, true);
    }
}
