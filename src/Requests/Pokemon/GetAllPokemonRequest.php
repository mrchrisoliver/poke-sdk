<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Requests\Pokemon;

use Saloon\Enums\Method;
use Saloon\Contracts\Response;
use Illuminate\Support\Collection;
use mrchrisoliver\Package\Requests\PokéRequest;
use mrchrisoliver\Package\DataObjects\PokemonCollection;

class GetAllPokemonRequest extends PokéRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        $data = new Collection($response->json()['results']);

        return $data->map(function ($item) {
            return PokemonCollection::fromResponse($item);
        });
    }
}
