<?php

declare(strict_types=1);

namespace mrchrisoliver\Package;

use Saloon\Http\Connector;
use Saloon\Contracts\Response;
use mrchrisoliver\Package\DataObjects\Pokemon;
use mrchrisoliver\Package\Resources\PokemonResource;

final class PokemonClient extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://pokeapi.co/api/v2/pokemon';
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return Pokemon::fromResponse($response);
    }

    public function pokemon(): PokemonResource
    {
        return new PokemonResource($this);
    }
}
