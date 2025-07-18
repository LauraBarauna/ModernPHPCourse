<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>


<div class="gallery">
<?php foreach($imageTitles AS $key => $value) : ?>
    <div class="image-box">
        <img src="./images/<?php echo rawurldecode($key); ?>" />
        <a href="image.php?image=<?php echo e($key);?>"><?php echo e($value);?></a>
    </div>
<?php endforeach; ?>
</div>




<?php include './views/footer.php'; ?>
