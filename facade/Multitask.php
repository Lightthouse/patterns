<?php


class Multitask
{
    public function watch (){
        $logger = new HtmlLogger();
        $client = new FileGetContentsHttpClient();

        $logger->log('Начало опреации.');

        $data = json_decode($client->get('https://api.coindesk.com/v1/bpi/currentprice.json'), true);
        $logger->log('Курс: $' . $data['bpi']['USD']['rate']);

        $logger->log('Конец операции.');
    }
}
