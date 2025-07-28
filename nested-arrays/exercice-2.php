<?php

$campaigns = [
    'Spring Sale' => [
        'AdSet1' => [
            'name' => 'Discounted Gadgets',
            'clicks' => 150,
            'impressions' => 10000
        ],
        'AdSet2' => [
            'name' => 'Outdoor Equipment',
            'clicks' => 250,
            'impressions' => 15000
        ],
    ],
    'Holiday Deals' => [
        'AdSet1' => [
            'name' => 'Winter Apparel',
            'clicks' => 200,
            'impressions' => 12000
        ],
        'AdSet2' => [
            'name' => 'Electronics Special',
            'clicks' => 300,
            'impressions' => 18000
        ],
    ],
];


$totalCampaignClicks = [];
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

$qtdClicks = count($totalCampaignClicks);
$qtdImpressions = count($totalCampaignImpressions);

$avgClicks = (array_sum($totalCampaignClicks)) / $qtdClicks;
$avgImpressions = (array_sum($totalCampaignImpressions)) / $qtdImpressions;

echo '"Average clicks per ad set: ' . $avgClicks . ', Average impressions per ad set: ' .$avgImpressions . '."';