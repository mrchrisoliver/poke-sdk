<?php

declare(strict_types=1);

use mrchrisoliver\Package\Exceptions\PokemonRequestException;
use mrchrisoliver\Package\PokemonClient;
use mrchrisoliver\Package\Requests\Pokemon\GetAllPokemonRequest;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Contracts\Request;
use Saloon\Http\PendingRequest;


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

it('can throw an exception', function () {
    $mockClient = new MockClient([
        MockResponse::make([], 404)
    ]);

    $client = new PokemonClient();
    $client->withMockClient($mockClient);

    $allPokemon = $client->pokemon()->all();
    expect(fn() => $allPokemon->throw())->toThrow(PokemonRequestException::class);

});
