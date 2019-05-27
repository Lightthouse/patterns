<?php

$url = 'https://github.com/login/oauth/access_token';

$parameters =[
    'client_id' =>'9cc8e8db90f631efe29b',
    'client_secret' =>'b3e9a7163fbbe8b2d95ad0c256710c460ca643a6',
    'code' =>$_GET['code'],
    'redirect_uri' =>'http://pattern/callback.php',
];

$opt = ['http' =>
    [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($parameters)
    ]
];

$context = stream_context_create($opt);

$result = file_get_contents('https://github.com/login/oauth/access_token',false,$context);

parse_str($result,$parameters);

$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,'https://api.github.com/user');
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_HTTPHEADER,array(
    'Authorization: token ' . $parameters['access_token'],
    'User-Agent: ' . $_SERVER['HTTP_USER_AGENT']
));

$result = curl_exec($curl);
curl_close($curl);
$data = json_decode($result,true);


$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,'https://api.github.com/user/emails');
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_HTTPHEADER,array(
    'Authorization: token ' . $parameters['access_token'],
    'User-Agent: ' . $_SERVER['HTTP_USER_AGENT']
));

$result = curl_exec($curl);
curl_close($curl);
$emails = json_decode($result,true);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?= $data['login']?></h1>
    <img src="<?=$data['avatar_url']?>" alt="ava">
    <p><?=$data['name']?></p>
    <p><?= $emails[0]['email']?></p>
</body>
</html>
