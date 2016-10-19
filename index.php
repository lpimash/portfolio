<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'autoloading.php';

$templates = new League\Plates\Engine(__DIR__ . DIRECTORY_SEPARATOR . 'templates');

echo $templates->render('pages/test', ['name' => 'Olivier']);