<?php

namespace mrchrisoliver\Package;

use mrchrisoliver\Package\Resources\PokemonResource;
use Saloon\Http\Connector;

final class PokemonClient extends Connector
{
    public function resolveBaseUrl(): string
    {
        return "https://pokeapi.co/api/v2/pokemon";
    }

    public function pokemon(): PokemonResource
    {
        return new PokemonResource($this);
    }
}
