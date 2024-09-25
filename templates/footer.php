<?php ob_start(); ?>
<footer>
    <p>A project made by Theo Brisset, to learn and have fun with PHP</p>
    <nav aria-label="Main navigation">
    <ul>
        <li><a href="/Pokemon-type-check/index.php?page=homepage">Homepage</a></li>
        <li><a href="/Pokemon-type-check/index.php?page=typevstype">Type vs type</a></li>
        <li><a href="/Pokemon-type-check/index.php?page=pokemonvspokemon">Pokemon vs pokemon</a></li>
        <li><a href="/Pokemon-type-check/index.php?page=equipevsequipe">Team vs team</a></li>
    </ul>
</nav>
</footer>
<?php $footer = ob_get_clean(); ?>