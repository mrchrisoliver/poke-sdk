<?php

namespace mrchrisoliver\Package\Responses;

use mrchrisoliver\Package\Contracts\PokemonResponseContract;
use mrchrisoliver\Package\Exceptions\PokemonRequestException;
use Saloon\Http\Response;
use Throwable;

final class PokemonResponse extends Response implements PokemonResponseContract
{
    public  function toException(): PokemonRequestException
    {
        if($this->failed()) {
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
