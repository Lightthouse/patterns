<?php


class NoMathFreeApp implements NoMathTitleEmojiInterface
{
    public function changeTitle(string $title):string{
        return $title . '&#9733;';
    }
}
