<?php

declare(strict_types=1);

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use mrchrisoliver\Package\PokemonClient;
use mrchrisoliver\Package\Requests\Pokemon\GetPokemonByIdRequest;

it('can send a request to get all pokemon', function () {
    $mockClient = new MockClient([
        GetPokemonByIdRequest::class => MockResponse::fixture('pokemon'),
    ]);

    $client = new PokemonClient();
    $client->withMockClient($mockClient);

    $allPokemon = $client->pokemon()->get(1)->dto();
    expect($allPokemon)
        ->toBeObject()
        ->not->toBeEmpty();
});
