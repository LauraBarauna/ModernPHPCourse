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
    $categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History'];

    var_dump(isset($categories[99]));
    var_dump(empty($categories[99]));
    var_dump(in_array('Programming', $categories));
    var_dump(in_array('German Books', $categories));
    var_dump(count($categories));
    echo $categories;
?></pre>
</body>
</html>