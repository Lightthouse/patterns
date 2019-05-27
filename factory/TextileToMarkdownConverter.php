<?php


class TextileToMarkdownConverter implements Converter
{
    function convert($text)
    {
        $search = ['**', '**', '__', '__'];
        $replace = ['**', '**', '*', '*',];

        return str_replace($search, $replace, $text);
    }
}
