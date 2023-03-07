<?php

declare(strict_types=1);

namespace mrchrisoliver\Package;

use Saloon\Http\Connector;
use mrchrisoliver\Package\Resources\PokemonResource;
use mrchrisoliver\Package\Responses\PokemonResponse;

final class PokemonClient extends Connector
{
    protected null|string $response = PokemonResponse::class;

    public function resolveBaseUrl(): string
    {
        return 'https://pokeapi.co/api/v2/pokemon';
    }

    public function pokemon(): PokemonResource
    {
        return new PokemonResource($this);
    }
}
