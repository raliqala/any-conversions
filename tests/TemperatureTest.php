<?php

namespace raliqala\AnyConversions\Tests;

use PHPUnit\Framework\TestCase;
use raliqala\AnyConversions\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function try_to_convert_Celsius_to_Fahrenheit()
    {
        $f = Temperature::fromCelsiusToFahrenheit(100)->toFahrenheit();

        $this->assertEquals(212.0000, $f, 'temperature');
    }
}
