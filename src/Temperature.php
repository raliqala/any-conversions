<?php

namespace raliqala\AnyConversions;

class Temperature
{
    private float $celsius;

    public static function fromCelsiusToFahrenheit(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    /**
     * @return float
     */
    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8000) + 32.00;
    }
}
