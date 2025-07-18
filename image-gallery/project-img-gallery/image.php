<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php
$imgValue = $_GET['image'] ?? null;
?>


<?php if (!empty($imgValue) && !empty($_GET)) : ?>
    <?php if (array_key_exists($imgValue, $imageDescriptions)) : ?>
        <img src="./images/<?php echo rawurldecode($imgValue); ?>" />
        <p class="image-description"><?php echo e($imageDescriptions[$imgValue]); ?></p>
    <?php endif; ?>
<?php endif; ?>



<?php include './views/footer.php'; ?>