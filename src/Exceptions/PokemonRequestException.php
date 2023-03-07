<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Exceptions;

use Saloon\Http\Response;
use Saloon\Exceptions\Request\RequestException;

class PokemonRequestException extends RequestException
{
    public function getResponse(): Response
    {
        return $this->body();
    }
}
