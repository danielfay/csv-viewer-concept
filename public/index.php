<?php

require '../vendor/autoload.php';

use App\Page\CsvTable;
use App\Page\FileList;
use App\Page\SourceList;

if ($_GET['source'] && $_GET['file']) {
    $page = new CsvTable($_GET['source'], $_GET['file']);
} else if ($_GET['source']) {
    $page = new FileList($_GET['source']);
} else {
    $page = new SourceList();
}

$page->display();
