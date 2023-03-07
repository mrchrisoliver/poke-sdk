<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Resources;

use Saloon\Contracts\Response;
use mrchrisoliver\Package\Requests\Pokemon\GetAllPokemonRequest;
use mrchrisoliver\Package\Requests\Pokemon\GetPokemonByIdRequest;

class PokemonResource extends Resource
{
    public function all(): Response
    {
        return $this->connector->send(new GetAllPokemonRequest());
    }

    public function get(int $id): Response
    {
        return $this->connector->send(new GetPokemonByIdRequest($id));
    }
}
