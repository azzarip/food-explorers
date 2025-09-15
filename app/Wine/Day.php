<?php

namespace App\Wine;

use Carbon\CarbonInterface;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use JsonSerializable;

final class Day implements Arrayable, JsonSerializable
{
    public function __construct(
        public readonly CarbonInterface $date,
        public readonly string $label,
        /** @var \Illuminate\Support\Collection<int,\App\Models\Wine\Date> */
        public readonly Collection $items,
    ) {}

    public function toArray(): array
    {
        return [
            'date'  => $this->date->toDateString(),
            'label' => $this->label,
            'items' => $this->items->values()->all(),
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
