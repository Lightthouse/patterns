<?php


class NoMathImpressiveConversion implements NoMathTitleEmojiInterface
{
    public function changeTitle(string $title): string
    {
        return $title . '&#128077;';
    }
}
