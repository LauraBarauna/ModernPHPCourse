<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php

require_once __DIR__ . '/inc/functions.inc.php';


$text = "Nelson Rolihlahla Mandela was a South African anti-apartheid activist and politician who served as the first president of South Africa from 1994 to 1999. He was the country's first black head of state and the first elected in a fully representative democratic election.";

$splitted = explode(".", $text);

$merged = implode("-----", $splitted);
var_dump($merged);

    
?></pre>
<?php foreach($splitted AS $segment) : ?>
    <p><?php echo $segment; ?></p>
<?php endforeach; ?>

<ul><li>
<?php
    echo implode("</li><li>", explode(".", e($text)));
?>
</li></ul>
</body>
</html>