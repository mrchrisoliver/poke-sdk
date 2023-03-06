<?php

namespace mrchrisoliver\Package\DataObjects;

use Saloon\Contracts\Response;

final class Pokemon
{
    public function __construct(
        public array $data
    )
    {}

    public static function fromResponse(Response $response): self
    {
        $data = $response->json()['results'];
        return new static($data);
    }
}
