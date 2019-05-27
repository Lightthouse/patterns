<?php


class NoMathHighRating implements NoMathTitleEmojiInterface
{
    public function changeTitle(string $title): string
    {
        return $title . '&#127379;';
    }
}
