<?php

declare(strict_types=1);

it('can send a request to get all pokemon', function () {
    $client = new \mrchrisoliver\Package\PokemonClient();

    $request = new \mrchrisoliver\Package\Requests\Pokemon\GetAllPokemonRequest();

    $response = $client->send($request);

    dd($response);
});
