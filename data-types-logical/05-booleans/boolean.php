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
            var_dump(true);
            var_dump(false);

            echo "-----\n";

            $age = 30;
            var_dump(30 > 40);
            var_dump(30 < 40);
            var_dump(30 <= 40);

            echo "-----\n";
            
            $name = "Laura";
            var_dump($name === "Laura");
            var_dump($name !== "Laura");
            var_dump("30" === 30);
            var_dump("30" == 30);

            ?></pre>
</body>

</html>