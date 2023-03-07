<?php

namespace mrchrisoliver\Package\Exceptions;

use Saloon\Contracts\Response;
use Saloon\Exceptions\Request\RequestException;

class PokemonRequestException extends RequestException
{
    public function getResponse(): Response
    {
        return $this->response;
    }
}
