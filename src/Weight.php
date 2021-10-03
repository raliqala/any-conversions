<?php

namespace raliqala\AnyConversions;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    /**
     * @return float
     */
    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
