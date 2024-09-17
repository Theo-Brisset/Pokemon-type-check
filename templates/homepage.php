<?php

use Application\Model\ListePokemon\ListePokemon;

 $title = "Liste des pokémons" ?>

<?php ob_start() ?>
<h1>Liste des pokémons disponibles</h1>
<p>Voici les pokémons actuellements enregistrés sur le site, n'hésitez pas à en proposer !</p>
<?php 

$listePokemon = new ListePokemon();
foreach($listePokemon as $pokemon){

?>
<div>
    <h2><?php echo $pokemon->getPokemonName() ?></h2>
</div>

<?php 

}
$content = ob_get_clean();

?>

<?php require_once('layout.php'); ?>