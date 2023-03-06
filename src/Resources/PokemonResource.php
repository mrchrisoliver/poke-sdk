<?php

namespace mrchrisoliver\Package\Resources;

use mrchrisoliver\Package\Requests\Pokemon\GetAllPokemonRequest;
use Saloon\Contracts\Response;

class PokemonResource extends Resource
{
    public function all(): Response
    {
        return $this->connector->send(new GetAllPokemonRequest());
    }
}
