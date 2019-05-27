<?php


class ImpressiveConversion implements TitleEmojiInterface
{
    public function addEmoji(array $applicationParams): string
    {
        if ($applicationParams['conversion'] > 15){
            return '&#128077;';
        }
        else{
            return '';
        }
    }
}
