<?php $title = "Pokemon vs pokemon"; ?>

<?php ob_start() ?>

<main>
    <?php foreach($matchResult as $match) 
    {
    ?>
    <p>Le type <?php echo '<img src="'. $match['type']->getTypeImg() . '">' ?>  face au type <?php echo '<img src="' . $match['typeVs']->getTypeImg() . '">' ?> prend des dégats multiplié par <?php echo $match['result'] ?></p>

    <?php 
    } 
    ?>
    <?= $result ?>
</main>


<?php $content = ob_get_clean() ?>
<?php require_once('layout.php'); ?>