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
        'Jordan Kay',
        'Sam Taylor',
        'Alex Reed',
        'Blake Jordan',
        'Casey Smith',
        'Drew Alex',
        'Elliot Ford',
        'Finley Harper',
        'Kim Lee',
        'Liam Park',
        'Morgan Drew'
    ];

    $priorityParticipants = [
        'Jordan Kay', // In the waiting list and has priority
        'Sam Taylor', // Not in the waiting list but has priority
        'Zane Pryor',  // Not in the waiting list but has priority
        'Laura',
        'Sabrinha',
        'Jão',
        'Nátalia'
    ];

    $finalAttendees = [];
    $backupCandidates = [];

    if (count($priorityParticipants) > 5) {
        $i = 0;
        while (count($finalAttendees) < 5) {
            $finalAttendees[] = $priorityParticipants[$i];
            $i++;
        }
        
        foreach ($priorityParticipants AS $people) {
            if (!in_array($people, $finalAttendees)) {
                $backupCandidates[] = $people;
                echo "Hey {$people}, we want to inform you 
                that you are one of our backup candidates. 🥳";
            }
        }
        
    } else {
        $finalAttendees = $priorityParticipants;
        $i = 0;

        while (count($finalAttendees) < 5) {
            $finalAttendees[] = $waitingList[$i];
            $finalAttendees = array_unique($finalAttendees);
            $i++;
        }
    }


    if (in_array($individualName, $finalAttendees)) {
        echo 'Final Attendee';
    } else if (in_array($individualName, $backupCandidates)) {
        echo 'Backup Candidate';
    } else if (in_array($individualName, $waitingList)) {
        $position = array_search($individualName, $waitingList) + 1;
        echo 'Waiting, position ' . $position;
    }



    ?>
</body>

</html>