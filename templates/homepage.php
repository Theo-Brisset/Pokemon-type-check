
<?php 


$title = "Liste des pokémons"; 

?>

<?php ob_start() ?>
<main>
    <h2>Liste des pokémons disponibles</h2>
    <p>Voici les pokémons actuellements enregistrés sur le site, n'hésitez pas à en proposer !</p>
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