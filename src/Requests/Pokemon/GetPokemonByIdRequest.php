<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Requests\Pokemon;

use Saloon\Enums\Method;
use Saloon\Contracts\Response;
use mrchrisoliver\Package\DataObjects\Pokemon;
use mrchrisoliver\Package\Requests\PokéRequest;

class GetPokemonByIdRequest extends PokéRequest
{
    protected Method $method = Method::GET;

    public function __construct(
        public int $id
    ) {
    }

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
