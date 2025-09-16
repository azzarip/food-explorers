<?php

namespace App\Wine;

use Carbon\CarbonInterface;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use JsonSerializable;

final class Day implements Arrayable, JsonSerializable
{
    protected bool $isToday = false;

    protected bool $isTomorrow = false;

    public function __construct(
        public readonly CarbonInterface $date,
        public readonly string $label,
        /** @var \Illuminate\Support\Collection<int,\App\Models\Wine\Date> */
        public readonly Collection $items,
    ) {}

    public function toArray(): array
    {
        return [
            'date' => $this->date->toDateString(),
            'label' => $this->label,
            'items' => $this->items->values()->all(),
        ];
    }

    public function isToday(): bool
    {
        return $this->date->is_today;
    }

    public function isTomorrow(): bool
    {
        return $this->date->is_tomorrow;
    }

    public function setToday(): void
    {
        $this->isToday = true;
    }

    public function setTomorrow(): void
    {
        $this->isTomorrow = true;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
