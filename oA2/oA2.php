<?php

$params = [
    'client_id' =>'9cc8e8db90f631efe29b',
    'redirect_uri' =>'http://pattern/callback.php',
    'scope' =>'user'
];
    $url = 'https://github.com/login/oauth/authorize?' . http_build_query($params);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<a href="<?= $url?>"> Github entry</a>
</body>
</html>
