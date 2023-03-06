<?php

namespace mrchrisoliver\Package\Requests\Pokemon;

use mrchrisoliver\Package\Requests\PokéRequest;
use Saloon\Enums\Method;

class GetAllPokemonRequest extends PokéRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/";
    }
}
