<?php ob_start(); ?>
<footer>
    <p>A project made by Theo Brisset, to learn and have fun with PHP</p>
<ul>
    <li><a href="/Pokemon-type-check/index.php?page=homepage">Homepage</a></li>
    <li><a href="/Pokemon-type-check/index.php?page=typevstype">Type vs type</a></li>
    <li><a href="/Pokemon-type-check/index.php?page=pokemonvspokemon">Pokemon vs pokemon</a></li>
    <li><a href="/Pokemon-type-check/index.php?page=equipevsequipe">Equipe vs équipe</a></li>
</ul>
</footer>
<?php $footer = ob_get_clean(); ?>