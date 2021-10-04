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

    /**
     *
     * @return float
     */
    public function toKelvin(): float
    {
        return $this->celsius + 273.15;
    }

    /**
     *
     * @return float
     */
    public function Rankine(): float
    {
        return ($this->celsius * 1.8000) + 491.67;
    }

    /**
     *
     * @return float
     */
    public function toNewton(): float
    {
        return $this->celsius * 0.33000;
    }

    /**
     * to Réaumur [realName]
     *
     * @return float
     */
    public function toReaumur(): float
    {
        return $this->celsius * 0.80000;
    }
}
