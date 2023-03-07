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
            $body = $this->response->getBody()->getContents();

            return new PokemonRequestException(
                response: $this,
                message: $this->getGuzzleException()?->getMessage(),
                code: $this->getGuzzleException()->getcode(),
                previous: $this->getGuzzleException()
            );
        }

        return new PokemonRequestException(
            response: $this
        );
    }
}
