<?php

declare(strict_types=1);

namespace mrchrisoliver\Package\DataObjects;

final class Pokemon
{
    public function __construct(
        public int $id,
        public string $name,
        public int $baseExperience,
        public bool $isDefault,
    ) {
    }

    /**
     *
     * @param array<string> $data
     */
    public static function fromResponse(array $data): self
    {
        return new static(
            id: $data['id'],
            name: $data['name'],
            baseExperience: $data['base_experience'],
            isDefault: $data['is_default'],
        );
    }
}
