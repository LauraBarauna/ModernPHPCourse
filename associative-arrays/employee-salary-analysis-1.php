<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $hrSalaries = [
        'Alice' => 5000,
        'Bob' => 6000,
        'Charlie' => 5500
    ];

    $salesSalaries = [
        'David' => 6200,
        'Elena' => 4800,
        'Fiona' => 5300
    ];

    $itSalaries = [
        'Fiona' => 5300,
        'George' => 5600,
        'Hannah' => 5900,
        'Ivan' => 6400
    ];

    // Calculate Departmental Expenditures:
    $hrTotal = array_sum(array_values($hrSalaries));
    $salesTotal = array_sum(array_values($salesSalaries));
    $itTotal = array_sum(array_values($itSalaries));
    $totals = [
        'HR' => $hrTotal,
        'Sales' => $salesTotal,
        'IT' => $itTotal,
    ];

    // Determine the Highest Expenditure:
    $maxValue = max(array_values($totals));
    $maxDept = array_search($maxValue, $totals);
    var_dump($maxDept);

    ?>
</body>

</html>