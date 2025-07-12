<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="simple.css">
</head>

<body>
    <pre><?php
            $number = 42;
            echo ($number * 8) . "\n";
            echo ($number / 8) . "\n";
            echo ($number + 8) . "\n";
            echo ('5' + '7') . "\n";
            // echo '5' + 'a7';
            echo round(3.333, 2) . "\n";

            $number *= 8;
            echo $number;

            ?></pre>
</body>

</html>