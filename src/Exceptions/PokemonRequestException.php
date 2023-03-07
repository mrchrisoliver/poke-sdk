<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\Exceptions;

use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Response;

class PokemonRequestException extends RequestException
{
    public function getResponse(): Response
    {
        return $this->body();
    }
}
