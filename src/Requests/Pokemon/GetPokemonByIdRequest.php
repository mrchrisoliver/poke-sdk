<?php

namespace mrchrisoliver\Package\Requests\Pokemon;

use Illuminate\Support\Collection;
use mrchrisoliver\Package\DataObjects\Pokemon;
use mrchrisoliver\Package\DataObjects\PokemonCollection;
use mrchrisoliver\Package\Requests\PokéRequest;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;

class GetPokemonByIdRequest extends PokéRequest
{
    protected Method $method = Method::GET;

    public function __construct(
        public int $id
    ){}

    public function resolveEndpoint(): string
    {
        return '/' . $this->id;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json();
        return Pokemon::fromResponse($data);
    }
}
