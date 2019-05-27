<?php


class HtmlLogger implements LoggerInterface
{
    public function log($message)
    {
        echo $message.'<br>';
    }
}
