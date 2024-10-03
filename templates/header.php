<?php ob_start() ?>
<header>
    <div>
        <a href="/Pokemon-type-check/index.php?page=homepage">
            <div class="logo">
                <p class="websiteName">PokéCheck</p>
                <p>Check relationships between poké-types to create the best team!</p>
            </div>
        </a>
        <nav aria-label="Main navigation">
            <ul>
                <li><a href="/pokemon-type-check/index.php?page=homepage">Homepage</a></li>
                <li><a href="/pokemon-type-check/index.php?page=typevstype">Type vs type</a></li>
                <li><a href="/pokemon-type-check/index.php?page=pokemonvspokemon">Pokemon vs pokemon</a></li>
                <li><a href="/pokemon-type-check/index.php?page=equipevsequipe">Team vs team</a></li>
            </ul>
        </nav>
    </div>
    <img class="pokeball" src="\pokemon-type-check\img\icons\pokeball.png">
</header>

<?php $header = ob_get_clean() ?>