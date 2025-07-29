<?php
$page = "city";

require_once __DIR__ . '/inc/functions.inc.php';



$cityGET = null;

if (!empty($_GET['city'])) {
    $cityGET = $_GET['city'];
}

$fileName = null;
if (!empty($cityGET)) {
    $cities = json_decode(
    file_get_contents(__DIR__ . '/../data/index.json'), 
    true
    );
    foreach($cities AS $city) {
        if ($city['city'] === $cityGET) {
            $fileName = $city['filename'];
            break;
        }
    }
}

$stats = [];
if (!empty($fileName)) {
    $results = json_decode(
        file_get_contents('compress.bzip2://' . __DIR__ . '/../data/' . $fileName),
        true
    )['results'];
    foreach($results AS $result) {
        if ($result['parameter'] !== 'pm25') continue;
        if ($result['value'] < 0) continue;

        $month = substr($result['date']['local'], 0, 7);

        if (!isset($stats[$month])) {
            $stats[$month] = [
                'pm25' => []
            ];
        }
        
        $stats[$month]['pm25'] = $result['value'];
    }
    
}

?>

<?php require __DIR__ . '/views/header.inc.php'; ?>

<?php if (empty($cityGET)) : ?>
    <p>The city could not be loaded.</p>
<?php else: ?>    
    <?php if (!empty($stats)) : ?>
        <table>
            <?php foreach($stats AS $month => $measurements) : ?>
                <tr>
                    <th><?php echo e($month); ?></th>
                    <td><?php echo e(array_sum($measurements) / count($measurements)); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
<?php endif; ?>



<?php require __DIR__  . '/views/footer.inc.php' ?> 