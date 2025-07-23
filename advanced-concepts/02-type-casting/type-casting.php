<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php

if (isset($_GET['price'])) {
    $price = (int) $_GET['price'];
    var_dump($price);
    var_dump($price * 1.19);
}

var_dump($_GET['name']);
if (isset($_GET['name'])) {
    $name = @(string) $_GET['name'];
    var_dump($name . '!!!');
}

    
?></pre>

<a href="type-casting.php?<?php echo http_build_query(['name' => ['Janis', 'Olivia']]); ?>">Link</a>

</body>
</html>