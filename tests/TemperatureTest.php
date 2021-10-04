<?php

namespace raliqala\AnyConversions\Tests;

use raliqala\AnyConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function try_to_convert_Celsius_to_Fahrenheit()
    {
        $f = Temperature::fromCelsiusToFahrenheit(100)->toFahrenheit();

        $this->assertEquals(212.0000, $f, 'temperature');
    }
}
