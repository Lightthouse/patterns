<?php

    require_once 'Converter.php';
    require_once 'BBCode.php';
    require_once 'Markdown.php';
    require_once 'ConverterFactoryInterface.php';
    require_once 'HtmlConverterFactory.php';
    require_once 'TextileConverterFactory.php';
    require_once 'TextileToMarkdownConverter.php';

    $html = '<b>Полужирный</b>. <i>Курсив</i>.';

    $converter = HtmlConverterFactory::textType(HtmlConverterFactory::TYPE_BBCODE);
    echo $converter->convert($html) . '</br></br>';

    $converter = HtmlConverterFactory::textType(HtmlConverterFactory::TYPE_MARKDOWN);
    echo $converter->convert($html) . '</br></br>';

    $html = '**Полужирный**. __Курсив__.';

    $converter = TextileConverterFactory::textType(TextileConverterFactory::TYPE_MARKDOWN);
    echo $converter->convert($html) . '</br></br>';

/*function htmlToBBCode($html)
{
    $search = ['<b>', '</b>', '<i>', '</i>', '<u>', '</u>'];
    $replace = ['[b]', '[/b]', '[i]', '[/i]', '[u]', '[/u]'];

    return str_replace($search, $replace, $html);
}

function htmlToMarkdown($html)
{
    $search = ['<b>', '</b>', '<i>', '</i>', '<u>', '</u>'];
    $replace = ['**', '**', '__', '__', '+', '+'];

    return str_replace($search, $replace, $html);
}

$html = '<b>Полужирный</b>. <i>Курсив</i>.';

echo htmlToBBCode($html) . '</br></br>';
echo htmlToMarkdown($html) . '</br></br>';*/
