<?php

declare(strict_types=1);

use mrchrisoliver\Package\PokemonClient;
use mrchrisoliver\Package\Requests\Pokemon\GetPokemonByIdRequest;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('can send a request to get all pokemon', function () {
    $mockClient = new MockClient([
        GetPokemonByIdRequest::class => MockResponse::fixture('pokemon'),
    ]);

    $client = new PokemonClient();
    $client->withMockClient($mockClient);

    $allPokemon = $client->pokemon()->get()->dto();
    expect($allPokemon)
        ->toBeObject()
        ->not->toBeEmpty();
});
