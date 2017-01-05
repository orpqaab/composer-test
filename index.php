<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Work\ComposerTest\Application();
$app->run($_GET);
