<?php

namespace mrchrisoliver\Package\Contracts;

use mrchrisoliver\Package\Exceptions\PokemonRequestException;

interface PokemonResponseContract
{
    public function toException(): PokemonRequestException;
}
