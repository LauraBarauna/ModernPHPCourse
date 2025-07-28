<?php

$campaigns = [
    'Tech Trends Extravaganza' => [
        'AdSet1' => [
            'name' => 'Launch Special',
            'targetAudience' => ['Young Adults', 'Tech Enthusiasts'],
            'clicks' => 150,
            'impressions' => 10000
        ],
        'AdSet2' => [
            'name' => 'Holiday Sale',
            'targetAudience' => ['Families', 'Holiday Shoppers'],
            'clicks' => 250,
            'impressions' => 15000
        ],
    ],
    'Seasonal Fashion Frenzy' => [
        'AdSet1' => [
            'name' => 'Spring Collection',
            'targetAudience' => ['Fashion Enthusiasts', 'Women'],
            'clicks' => 200,
            'impressions' => 12000
        ],
        'AdSet2' => [
            'name' => 'Back to School',
            'targetAudience' => ['Students', 'Parents', 'Young Adults'],
            'clicks' => 300,
            'impressions' => 18000
        ],
    ],
];

$totalAdSet1CampaignClicks = [];
$totalCampaignImpressions = [];

foreach ($campaigns as $campaignName => $adSet) {
    $sumClick = 0;
    $sumImpression = 0;

    foreach ($adSet as $values) {
        $sumClick += $values['clicks'];
        $sumImpression += $values['impressions'];
    }

    $totalCampaignClicks[$campaignName] = $sumClick;
    $totalCampaignImpressions[$campaignName] = $sumImpression;
}

$highestValueCTR = 0;
$name = '';
$highestCTR = [];

foreach($totalCampaignClicks AS $campaignName => $totalClicks) {
    $CTR = ( $totalClicks / $totalCampaignImpressions[$campaignName] ) / 100;
    $round = round($CTR * 10000, 2);

    if ($round > $highestValueCTR) {
        $highestValueCTR = $round;
        $name = $campaignName;
    }


}

$highestCTR[$name] = $highestValueCTR;

var_dump($highestCTR);

