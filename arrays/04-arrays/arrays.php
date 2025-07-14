<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<pre><?php
    
    $names = [
        '',
    ];

    $namesQtd = count($names);
    $rand = rand(0, ($namesQtd - 1));
    echo "The winner is: {$names[$rand]}";
    var_dump(empty($names) || $names === '');
    
    

?></pre>
</body>
</html>