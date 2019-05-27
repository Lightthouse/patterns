<?php


class TextileConverterFactory implements ConverterFactoryInterface
{
    const TYPE_MARKDOWN = 1;
    public static function textType($type)
    {
        switch ($type) {
            case self::TYPE_MARKDOWN:
                return new TextileToMarkdownConverter();

            default:
                echo "Unknown converter"; exit;
        }
    }
}
