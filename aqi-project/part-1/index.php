<?php
$page = "index";
require_once __DIR__ .'/inc/functions.inc.php';

$cities = json_decode(
    file_get_contents(__DIR__ . '/../data/index.json'), 
    true
);

function citiesInfo($city, $country, $flag) {
    return "$city , $country ($flag)";
}
?>

<?php require __DIR__ . '/views/header.inc.php'; ?>

<ul>
<?php foreach($cities AS $city) : ?>
    <li>
        <a href="city.php/?<?php echo http_build_query(['city' => $city['city']]); ?>">
            <p><?php echo e(citiesInfo($city['city'], $city['country'], $city['flag'])); ?></p>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<?php require __DIR__  . '/views/footer.inc.php' ?>