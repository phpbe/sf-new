<?php
require __DIR__ . '/vendor/autoload.php';

$runtime = new \Be\Sf\Runtime\Driver();
$runtime->setRootPath(__DIR__);
\Be\F\Runtime\RuntimeFactory::setInstance($runtime);
$runtime->execute();
