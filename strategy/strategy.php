<?php

require_once 'TitleEmojiInterface.php';
require_once 'ImpressiveConversion.php';
require_once 'HighRating.php';
require_once 'FreeApp.php';

require_once 'NoMathTitleEmojiInterface.php';
require_once 'NoMathImpressiveConversion.php';
require_once 'NoMathHighRating.php';
require_once 'NoMathFreeApp.php';


$applications = [
    ['id' => '422138104', 'title' => 'Pool Break 3D Billiards 8 Ball, 9 Ball, Snooker', 'rating' => 4.50, 'price' => 1.99, 'conversion' => 51],
    ['id' => '1031013627', 'title' => 'Sea of Squares', 'rating' => 3.00, 'price' => 0.99, 'conversion' => 33],
    ['id' => '364726781', 'title' => 'Jumpy Horse', 'rating' => 4.00, 'price' => 0.99, 'conversion' => 15],
    ['id' => '871610532', 'title' => 'Alphabet Gaga', 'rating' => 3.50, 'price' => 0.99, 'conversion' => 3],
    ['id' => '783228889', 'title' => 'Air Hockey - Style & Fun', 'rating' => 0.00, 'price' => 0.00, 'conversion' => 0],
];

$price = new FreeApp();
$conversion = new ImpressiveConversion();
$rating = new HighRating();

foreach ($applications as $application) {
    $title = $application['title'];

    $title.=$price->addEmoji($application);
    $title.=$conversion->addEmoji($application);
    $title.=$rating->addEmoji($application);

    echo $title . '<br/>';
}


/*$noMathConversion= new NoMathImpressiveConversion();
$noMathRating= new NoMathHighRating();
$noMathPrice= new NoMathFreeApp();

foreach ($applications as $application) {
    $title = $application['title'];

    if ($application['rating'] > 3.5) {
        $title = $noMathRating->changeTitle($title);
    }

    if ($application['price'] == 0) {
        $title = $noMathPrice->changeTitle($title);
    }

    if ($application['conversion'] > 15) {
        $title = $noMathConversion->changeTitle($title);
    }

    echo $title . '<br/>';
}*/


