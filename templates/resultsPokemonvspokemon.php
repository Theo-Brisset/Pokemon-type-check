<?php $title = "Pokemon vs pokemon"; ?>

<?php ob_start() ?>

<main>
    <h2><?= $matchResult ?></h2>
    <div class="pokemonvspokemonResult">
        <div class="pokemonCard <?= $pokemon->getPokemonResult() ?> leftColumn">
            <h2 class="white-text"><?= $pokemon->getPokemonName() ?></h2>
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
            <h2 class="white-text"><?= $pokemonVs->getPokemonName() ?></h2>
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
    
    <?php foreach($fullMatchResult as $match) 
    {
    ?>
        <p>
            <?php echo '<img src="'. $match['type']->getTypeImg() . '">' ?>  
            <?php 
                if($match['result'] == 0.5){
                    echo '→'; 
                } if($match['result'] == 1){
                    echo '='; 
                } if($match['result'] == 2){
                    echo '←'; 
                } ?> 
            <?php echo '<img src="' . $match['typeVs']->getTypeImg() . '">' ?>
        </p>
    <?php 
    } 
    ?>
</main>


<?php $content = ob_get_clean() ?>
<?php require_once('layout.php'); ?>