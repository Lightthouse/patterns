<?php

require_once 'LoggerInterface.php';
require_once 'HtmlLogger.php';
require_once 'HttpClientInterface.php';
require_once 'FileGetContentsHttpClient.php';
require_once 'Multitask.php';

/*$logger = new HtmlLogger();
$client = new FileGetContentsHttpClient();

$logger->log('Начало опреации.');

$data = json_decode($client->get('https://api.coindesk.com/v1/bpi/currentprice.json'), true);
$logger->log('Курс: $' . $data['bpi']['USD']['rate']);

$logger->log('Конец операции.');*/

$bit = new Multitask();
$bit->watch();
