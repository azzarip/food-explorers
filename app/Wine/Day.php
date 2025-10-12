<?php

namespace App\Wine;

use App\Models\Wine\Date;
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
        public string $label,
        /** @var Collection<int, Date> */
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
        return $this->isToday;
    }

    public function isTomorrow(): bool
    {
        return $this->isTomorrow;
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

        public function getLabel(): string
    {
        return $this->label;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
