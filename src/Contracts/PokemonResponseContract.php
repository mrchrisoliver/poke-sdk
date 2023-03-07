<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Contracts;

use mrchrisoliver\Package\Exceptions\PokemonRequestException;

interface PokemonResponseContract
{
    public function toException(): PokemonRequestException;
}
