<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Requests\Pokemon;

use Saloon\Enums\Method;
use mrchrisoliver\Package\Requests\PokéRequest;

class GetAllPokemonRequest extends PokéRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/';
    }
}
