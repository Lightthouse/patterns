<?php


class HtmlConverterFactory implements ConverterFactoryInterface
{
    const TYPE_BBCODE = 1;
    const TYPE_MARKDOWN = 2;

    public static function textType($type)
    {
        switch ($type) {
            case self::TYPE_BBCODE:
                return new Markdown();

            case self::TYPE_MARKDOWN:
                return new BBCode();

            default:
                echo "Unknown converter";
                exit;
        }
    }
}
