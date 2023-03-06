<?php

namespace mrchrisoliver\Package;

use Saloon\Http\Connector;

final class PokemonClient extends Connector
{
    public function resolveBaseUrl(): string
    {
        return "https://pokeapi.co/api/v2/pokemon";
    }
}
