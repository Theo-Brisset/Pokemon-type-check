<?php ob_start() ?>
<header>
    <div class="logo">
        <p class="websiteName">PokéCheck</p>
        <p>Check relationships between poké-types to compose your teams!</p>
    </div>
    <nav aria-label="Main navigation">
        <ul>
            <li><a href="/Pokemon-type-check/index.php?page=homepage">Homepage</a></li>
            <li><a href="/Pokemon-type-check/index.php?page=typevstype">Type vs type</a></li>
            <li><a href="/Pokemon-type-check/index.php?page=pokemonvspokemon">Pokemon vs pokemon</a></li>
            <li><a href="/Pokemon-type-check/index.php?page=equipevsequipe">Team vs team</a></li>
        </ul>
    </nav>
</header>

<?php $header = ob_get_clean() ?>