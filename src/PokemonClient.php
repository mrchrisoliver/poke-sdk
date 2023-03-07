<?php

declare(strict_types=1);

namespace mrchrisoliver\Package;

use Saloon\Http\Connector;
use mrchrisoliver\Package\Resources\PokemonResource;

final class PokemonClient extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://pokeapi.co/api/v2/pokemon';
    }

    public function pokemon(): PokemonResource
    {
        return new PokemonResource($this);
    }
}
