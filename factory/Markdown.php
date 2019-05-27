<?php


class Markdown implements Converter
{
    function convert ($text){
        $search = ['<b>', '</b>', '<i>', '</i>', '<u>', '</u>'];
        $replace = ['**', '**', '__', '__', '+', '+'];

        return str_replace($search, $replace, $text);
    }
}
