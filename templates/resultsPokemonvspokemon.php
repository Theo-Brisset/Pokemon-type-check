<?php $title = "Pokemon vs pokemon"; ?>

<?php ob_start() ?>

<main>
    <div style="display: flex;gap:30px">
        <div class="pokemonCard" style="width: 300px">
            <img src="<?= $pokemon->getPokemonImg() ?>">
        </div>
        <div class="pokemonCard" style="width: 300px">
            <img src="<?= $pokemonVs->getPokemonImg() ?>">
        </div>
    </div>
    <?= $matchResult ?>
    <?php foreach($fullMatchResult as $match) 
    {
    ?>
    <p>Quand le type <?php echo '<img src="'. $match['type']->getTypeImg() . '">' ?>  est attaqué par une attaque du type <?php echo '<img src="' . $match['typeVs']->getTypeImg() . '">' ?>, il prend des dégats multiplié par <?php echo $match['result'] ?></p>

    <?php 
    } 
    ?>
    <?= $result ?>
</main>


<?php $content = ob_get_clean() ?>
<?php require_once('layout.php'); ?>