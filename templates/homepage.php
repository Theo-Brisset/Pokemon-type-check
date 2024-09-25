
<?php 


$title = "Liste des pokémons"; 

?>

<?php ob_start() ?>
<main>
    <h1>Available pokemons list</h1>
    <p>Here are the pokemon actually available to test on the website, feel free to add more if you have all the informations about them ! You can find them on the Bulbepedia website, the fanmade Pokemon Bible.</p>
    <div>
        <a class="button" href="https://bulbapedia.bulbagarden.net/wiki/Main_Page">Go to Pokemon Bible</a>
        <a class="button button2" href="">Add a Pokemon</a>
    </div>
    <div class="pokemonListe" >
        <?php 
        
        foreach($listePokemon as $pokemon){
        ?>

        <div class="pokemonCard">
            <h2><?php echo $pokemon->getPokemonName() ?></h2>
            <img class="pokemonImg" src='<?= $pokemon->getPokemonImg() ?>'>
            <ul>
                <li><img src='<?= $pokemon->getType1()->getTypeImg() ?>'>
                <?php if($pokemon->getType2() !== null)
                { ?>
                    <li><img src='<?= $pokemon->getType2()->getTypeImg() ?>'>
                <?php 
                } ?>
            </ul>
        </div>

        <?php 
        }
        ?>
    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>