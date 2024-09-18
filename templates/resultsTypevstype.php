<?php $title = "Types vs types"; ?>

<?php ob_start() ?>

<main>
    <?= $result ?>
</main>


<?php $content = ob_get_clean() ?>
<?php require_once('layout.php'); ?>

