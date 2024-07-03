<?php

declare(strict_types=1);

namespace AzureOss\Storage\Common\SAS;

final class SASIpRange
{
    public function __construct(
        public readonly string $start,
        public readonly ?string $end = null,
    ) {
    }

    public function __toString(): string
    {
        return $this->end === null
            ? $this->start
            : $this->start . "-" . $this->end;
    }
}
