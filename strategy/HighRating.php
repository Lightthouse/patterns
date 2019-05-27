<?php


class HighRating implements TitleEmojiInterface
{
    public function addEmoji(array $applicationParams): string
    {
        if ($applicationParams['price'] == 0){
            return '&#127379;';
        }
        else{
            return '';
        }
    }
}
