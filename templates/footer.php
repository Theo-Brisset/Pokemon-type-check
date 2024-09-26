<?php ob_start(); ?>
<footer>
    <div>
        <a href="/Pokemon-type-check/index.php?page=homepage">
            <div class="logo">
                <p class="websiteName">PokéCheck</p>
                <p>Check relationships between poké-types to create the best team!</p>
            </div>
        </a>
        <p>A project made by Theo Brisset, to learn and have fun with PHP</p>
        <nav aria-label="Main navigation">
            <ul>
                <li><a href="/Pokemon-type-check/index.php?page=homepage">Homepage</a></li>
                <li><a href="/Pokemon-type-check/index.php?page=typevstype">Type vs type</a></li>
                <li><a href="/Pokemon-type-check/index.php?page=pokemonvspokemon">Pokemon vs pokemon</a></li>
                <li><a href="/Pokemon-type-check/index.php?page=equipevsequipe">Team vs team</a></li>
            </ul>
        </nav>
    </div>
    
</footer>
<?php $footer = ob_get_clean(); ?>