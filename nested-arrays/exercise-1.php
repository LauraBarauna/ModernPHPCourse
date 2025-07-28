<?php 

$campaigns = [
    'Spring Sale' => [
        'AdSet1' => [
            'name' => 'Discounted Gadgets'
        ],
        'AdSet2' => [
            'name' => 'Outdoor Equipment'
        ],
    ],
    'Holiday Deals' => [
        'AdSet1' => [
            'name' => 'Winter Apparel'
        ],
        'AdSet2' => [
            'name' => 'Electronics Special'
        ],
    ],
];

$first = $campaigns['Spring Sale'];
$namesAdSet1 = [];



foreach ($campaigns as $campaignName => $adSets) {
    $adSetNames = [];

    foreach ($adSets as $adSet) {
        $adSetNames[] = '"' . $adSet['name'] . '"';
    }

    echo "- $campaignName: " . implode(", ", $adSetNames) . PHP_EOL;
}
