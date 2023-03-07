<?php

declare(strict_types=1);

use mrchrisoliver\Package\PokemonClient;
use mrchrisoliver\Package\Requests\Pokemon\GetAllPokemonRequest;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;


it('can send a request to get all pokemon', function () {
    $mockClient = new MockClient([
        GetAllPokemonRequest::class => MockResponse::fixture('pokemon-collection'),
    ]);

    $client = new PokemonClient();
    $client->withMockClient($mockClient);


    $allPokemon = $client->pokemon()->all()->dto();
    expect($allPokemon)
        ->toBeObject()
        ->not->toBeEmpty();
});
