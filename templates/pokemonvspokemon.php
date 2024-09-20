<?php $title = "Pokémon vs pokémon" ?>

<?php ob_start() ?>

<main>
    <h1>Liste de Pokémon enregistrés</h1>
    <p>Choisissez un pokémon puis un autre pour voir lequel a l'avantage du type sur l'autre !</p>
    <form action="/Pokemon-type-check/index.php?page=resultpokemonvspokemon" method="POST">
        <fieldset>
            <h2>Pokémon à tester</h2>
            <?php 
            foreach($listePokemons as $pokemon){
            ?>
            
            <label class="labelPokemon"> 
                <input type="radio" name="pokemon" value="<?= $pokemon->getId(); ?>">
                <img style="max-width:100px" src='<?= $pokemon->getPokemonImg() ?>' alt='<?= $pokemon->getPokemonName() ?>'>
                <p><?= $pokemon->getPokemonName(); ?></p>
                <ul>
                    <li><img src='<?= $pokemon->getType1()->getTypeImg() ?>'>
                    <?php if($pokemon->getType2() !== null)
                    { ?>
                        <li><img src='<?= $pokemon->getType2()->getTypeImg() ?>'>
                    <?php 
                    } ?>
                </ul>
            </label>
            
            <?php 
            }
            ?>
        </fieldset>
        <fieldset>
            <h2>Contre quel pokémon ?</h2>           
            <?php 
            foreach($listePokemons as $pokemon){
            ?>
            
            <label class="labelPokemon">
                <input type="radio" name="vspokemon" value="<?= $pokemon->getId(); ?>">
                <img style="max-width:100px" src='<?= $pokemon->getPokemonImg() ?>' alt='<?= $pokemon->getPokemonName() ?>'>
                <p><?= $pokemon->getPokemonName(); ?></p>
                <ul>
                    <li><img src='<?= $pokemon->getType1()->getTypeImg() ?>'>
                    <?php if($pokemon->getType2() !== null)
                    { ?>
                        <li><img src='<?= $pokemon->getType2()->getTypeImg() ?>'>
                    <?php 
                    } ?>
                </ul>
            </label>
            
            <?php 
            }
            ?>
        </fieldset>
        <button type="submit">Tester</button>
    </form>
</main>


<?php $content = ob_get_clean() ?>
<?php require_once('layout.php'); ?>