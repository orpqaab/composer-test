<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('composer-proba');
$log->pushHandler(new StreamHandler('composer-proba.log'));

$log->warning('Ez egy figyelmeztetes.');
$log->error('Ez egy hiba!');