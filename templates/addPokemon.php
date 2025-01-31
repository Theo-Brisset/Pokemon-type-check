<?php 


$title = "Add a pokemon"; 

?>

<?php ob_start() ?>
<main>
    <h1>Add pokemon to our database</h1>
    <p>To check which pokemon are already available to test here, <a>you can quickly go to this page</a>.</p>
    <form class="addAPokemon" method="post">
        <fieldset>
            <label>Name</label>
            <input type='text' name="name" id="name" required>
            <label>Picture</label>
            <input type='file' name='picture' id='picture' accept="image/png image/jpeg" onchange='validateAndPreview(event)' required>
            <img id='preview' width='200' style='display:none;'>
            <label>Total stat</label>
            <input type='number' name='stat' id='stat' required>
            <div>
                <label>First type</label>
                <input type='text' name='firstType' id='firstType' required>
                <label>Second type</label>
                <input type='text' name='secondType' id='secondType'>
            </div>
            <button type="submit" class="button addPokemon">Add pokemon</button>
        </fieldset>
    </div>
</main>
<script src="/Pokemon-type-check/js/addPokemon.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>