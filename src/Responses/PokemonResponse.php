<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Responses;

use Saloon\Http\Response;
use mrchrisoliver\Package\Contracts\PokemonResponseContract;
use mrchrisoliver\Package\Exceptions\PokemonRequestException;

final class PokemonResponse extends Response implements PokemonResponseContract
{
    public function toException(): PokemonRequestException
    {
        if ($this->failed()) {
            return new PokemonRequestException(
                response: $this,
                message: $this->body(),
                code: $this->status(),
                previous: $this->getSenderException()
            );
        }

        return new PokemonRequestException(
            response: $this
        );
    }
}
