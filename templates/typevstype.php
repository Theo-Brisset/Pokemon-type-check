<?php $title = "Types vs types"; ?>

<?php ob_start() ?>

<main>
    <h1>Liste des types Pokémon</h1>
    <p>Choisissez un type puis cliquez sur un autre pour voir leur relation !</p>
    <form action="/Pokemon-type-check/index.php?page=resulttypevstype" method="POST">
        <fieldset>
            <h2>Type à tester</h2>
            <?php 
            foreach($listeTypes as $type){
            ?>
            
            <label>
                <input type="radio" name="type" value="<?= $type->getTypeId(); ?>">
                <img src='<?= $type->getTypeImg() ?>' alt='<?= $type->getTypeName() ?>'>
            </label>
            
            <?php 
            }
            ?>
        </fieldset>
        <fieldset>
            <h2>Contre quel type ?</h2>           
            <?php 
            foreach($listeTypes as $type){
            ?>
            
            <label>
                <input type="radio" name="vstype" value="<?= $type->getTypeId(); ?>">
                <img src='<?= $type->getTypeImg() ?>' alt='<?= $type->getTypeName() ?>'>
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