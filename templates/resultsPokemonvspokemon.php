<?php $title = "Pokemon vs pokemon"; ?>

<?php ob_start() ?>

<main>
    <div class="pokemonvspokemonResult">
        <div class="pokemonCard <?= $pokemon->getPokemonResult() ?> leftColumn">
            <h2><?= $pokemon->getPokemonName() ?></h2>
            <img src="<?= $pokemon->getPokemonImg() ?>">
            <ul>
                <li><img src='<?= $pokemon->getType1()->getTypeImg() ?>'>
                <?php if($pokemon->getType2() !== null)
                { ?>
                    <li><img src='<?= $pokemon->getType2()->getTypeImg() ?>'>
                <?php 
                } ?>
            </ul>
        </div>
        <div class="arrow centerColumn">
            <?php if($pokemon->getPokemonResult() == 'winner'){ ?>
                <span>→</span> 
            <?php } elseif($pokemonVs->getPokemonResult() == 'winner'){ ?>
                <span>←</span>
            <?php } else { ?>
                <span>=</span>
            <?php } ?>
        </div>
        <div class="pokemonCard <?= $pokemonVs->getPokemonResult() ?> rightColumn">
            <h2><?= $pokemonVs->getPokemonName() ?></h2>
            <img src="<?= $pokemonVs->getPokemonImg() ?>">
            <ul>
                <li><img src='<?= $pokemonVs->getType1()->getTypeImg() ?>'>
                <?php if($pokemonVs->getType2() !== null)
                { ?>
                    <li><img src='<?= $pokemonVs->getType2()->getTypeImg() ?>'>
                <?php 
                } ?>
            </ul>
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