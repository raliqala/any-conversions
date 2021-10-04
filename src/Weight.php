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

    // From KG to other

    /**
     * lbs
     * @return float
     */
    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }

    /**
     * oz
     * @return float
     */
    public function toOunces(): float
    {
        return $this->kilograms * 35.274;
    }

    /**
     * st
     * @return float
     */
    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }

    /**
     *
     * @return float
     */
    public function toTonnes(): float
    {
        return $this->kilograms / 1000.0;
    }

    /**
     *
     * @return float
     */
    public function toGrams(): float
    {
        return $this->kilograms / 0.0010000;
    }

    /**
     *
     * @return float
     */
    public function toMilligrams(): float
    {
        return $this->kilograms / 0.0000010000;
    }

    /**
     *
     * @return float
     */
    public function toCarats(): float
    {
        return $this->kilograms * 5000.0;
    }

    /**
     *
     * @return float
     */
    public function toMicrograms(): float
    {
        return $this->kilograms / 0.0000000010000;
    }

    /**
     *
     * @return float
     */
    public function toLongTonsUK(): float
    {
        return $this->kilograms * 0.00098421;
    }

    /**
     *
     * @return float
     */
    public function toShortTonsUS(): float
    {
        return $this->kilograms * 0.0011023;
    }

    /**
     *
     * @return float
     */
    public function toShortHundredweightsUS(): float
    {
        return $this->kilograms * 0.022046;
    }

    /**
     *
     * @return float
     */
    public function toLongHundredweightsUK(): float
    {
        return $this->kilograms * 0.019684;
    }

    /**
     *
     * @return float
     */
    public function toTroyPounds(): float
    {
        return $this->kilograms * 2.6792;
    }

    /**
     *
     * @return float
     */
    public function toTroyOunces(): float
    {
        return $this->kilograms * 32.151;
    }

    /**
     *
     * @return float
     */
    public function toPennyweights(): float
    {
        return $this->kilograms * 643.01;
    }

    /**
     *
     * @return float
     */
    public function toGrains(): float
    {
        return $this->kilograms * 15432;
    }
}
