<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\DataObjects;

final class Pokemon
{
    public function __construct(
        public string $name,
        public string $url
    ) {
    }

    /**
     *
     * @param array<string> $data
     */
    public static function fromResponse(array $data): self
    {
        return new static($data['name'], $data['url']);
    }
}
