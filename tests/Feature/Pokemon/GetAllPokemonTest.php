<?php

use mrchrisoliver\Package\PokemonClient;

it('can send a request to get all pokemon', function() {
    $client = new PokemonClient();

    $allPokemon = $client->pokemon()->all()->dto();
    expect($allPokemon)
        ->toBeObject()
        ->not->toBeEmpty();
});
