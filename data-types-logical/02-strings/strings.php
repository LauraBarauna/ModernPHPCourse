<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="simple.css">
</head>

<body>
    <pre> <?php

            $greeting = "I'm learning PHP!";
            echo "{$greeting}_!!";

            echo "\n";

            $name = 'Laura';
            $subject = 'PHP';

            echo "I'm {$name} and I'm learning {$subject}.";
            // echo 'I"m {$name} and I"m learning {$subject}.';

            echo "\n";

            echo "\t-";
            ?></pre>

            <p>A first line of text. <?php echo '<br/>'; ?> A second line of text</p>
            <p>A first line of text. <?php echo "\n"; ?> A second line of text</p>

            <p><?php echo 'My last echo, {$abc}'; ?></p>
            <p><?php echo "My last echo {$abc}"; ?></p>
</body>

</html>