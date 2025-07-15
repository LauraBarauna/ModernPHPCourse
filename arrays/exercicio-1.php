<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $waitingList = [
        'Laura',
        'Laura',
        'Sabrina',
        'Pedro',
        'Sofia',
        'Sofia',
        'Caique',

    ];

    $remove = [
        'Sofia',
        'Pedro',
    ];

    $waitingList = array_unique($waitingList);
    $remove = array_unique($remove);

    $cleanedWaitingList = [];
    $selectedParticipants = [];

    foreach ($waitingList as $participant) {
        if (!in_array($participant, $remove)) {
            $cleanedWaitingList[] = $participant;
        }
    }

    sort($cleanedWaitingList);

    if (count($cleanedWaitingList) > 5) {
        for ($i = 0; $i < 5; $i++) {
            $selectedParticipants[] = $cleanedWaitingList[$i];
        }
    } else {
        $selectedParticipants = $cleanedWaitingList;
    }

    var_dump($selectedParticipants);

    ?>
    <ul>
        <?php foreach ($cleanedWaitingList as $aprovedParticipant) : ?>
            <li>
                <?php if (in_array($aprovedParticipant, $selectedParticipants)) {
                    echo $aprovedParticipant . ' ✅';
                } else {
                    echo $aprovedParticipant . ' ❌';
                }

                ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>