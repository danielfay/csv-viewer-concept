<?php

namespace App\Page;

use App\Core\Page;

class CsvTable extends Page
{
    protected $template_name = 'CsvTable.php';
    protected $data;
    protected $delimiter;
    protected $file;
    protected $source;

    function __construct($source, $file)
    {
        $this->source = $source;
        $this->file = $file;
        $this->delimiter = $this->get_delimiter();
        $this->load_csv_file();

        $this->template_data = [
            'file' => $this->file,
            'source' => $this->source,
            'rows' => $this->data
        ];
    }

    function get_delimiter() {
        $sources = $this->load_sources();
        return $sources[$this->source]['delimiter'];
    }

    protected function load_sources()
    {
        $sources_json = file_get_contents(__DIR__ . '/../data/sources.json');
        return json_decode($sources_json, true);
    }

    protected function load_csv_file()
    {
        $path = __DIR__ . '/../data/datasources/' . $this->source . '/' . $this->file;
        $file = fopen($path, 'r');
        while (($line = fgetcsv($file, 0, $this->delimiter)) !== FALSE) {
            $this->data[] = $line;
        }
        fclose($file);
    }
}
