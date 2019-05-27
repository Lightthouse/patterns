<?php


class FreeApp implements TitleEmojiInterface
{
    public function addEmoji(array $applicationParams): string
    {
        if ($applicationParams['rating'] > 3.5){
            return '&#9733;';
        }
        else{
            return '';
        }
    }
}
