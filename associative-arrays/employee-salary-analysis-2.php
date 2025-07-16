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

    // Consolidate Departmental Records:
    $companySalaries = [...$hrSalaries, ...$salesSalaries, ...$itSalaries];
    $lowestSalaries = [];
    $minSalary = min($companySalaries);

    foreach($companySalaries AS $employe => $salary) {
        if($salary === $minSalary) {
            $lowestSalaries[$employe] = $salary;
        }
    }
    
    var_dump($lowestSalaries);

    ?>
</body>

</html>