<?php 


$title = "Add a pokemon"; 

?>

<?php ob_start() ?>
<main>
    <h1>You want to add pokemon to our database ?</h1>
    <p>To check which pokemon are already available to test here, <a>you can quickly go to this page</a>.</p>
    <form class="addAPokemon" >
        <fieldset>
            <label>Name</label>
            <input type='text' required>
            <label>Picture</label>
            <input type='text' required>
            <label>Total stat</label>
            <input type='number' required>
            <div>
                <label>First type</label>
                <input type='text' required>
                <label>Second type</label>
                <input type='text'>
            </div>
        </fieldset>
    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>