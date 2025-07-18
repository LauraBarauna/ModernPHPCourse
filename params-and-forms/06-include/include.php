<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="simple.css">
</head>
<body>
    <?php
    
        $pages = [
            'citrus_salmon' => 'Citrus Symphony Salmon',
            'mediterranian_pasta' => 'Mediterranean Marvel Pasta',
            'sunset_risotto' => 'Sunset Risotto',
            'tropical_tacos' => 'Tropical Tango Tacos',
        ];

    function e($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    ?>

    <form method="GET" action="include.php">
        <select name="page">
            <option value="">Please select a recipe</option>
            <?php foreach($pages AS $key => $value) : ?>
                    <option value="<?php echo e($key); ?>" 
                    <?php if(!empty($_GET['page']) && $_GET['page'] === $key) echo 'selected'; ?>
                ><?php echo e($value); ?></option> 
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Submit!" /> 
    </form>

    <?php
    if(!empty($_GET['page'])) {
        $page = $_GET['page'];
        if(in_array($page, array_keys($pages))) {
            echo file_get_contents("pages/{$page}.html");
        }
    }

    ?>



</body>
</html>