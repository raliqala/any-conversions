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


    /** @test */
    public function try_to_convert_Celsius_to_toKelvin()
    {
        $k = Temperature::fromCelsiusToFahrenheit(100)->toKelvin();

        $this->assertEquals(373.1500, $k, 'temperature');
    }


    /** @test */
    public function try_to_convert_Celsius_to_Rankine()
    {
        $r = Temperature::fromCelsiusToFahrenheit(100)->Rankine();

        $this->assertEquals(671.6700, $r, 'temperature');
    }


    /** @test */
    public function try_to_convert_Celsius_to_toNewton()
    {
        $n = Temperature::fromCelsiusToFahrenheit(100)->toNewton();

        $this->assertEquals(33.00000, $n, 'temperature');
    }


    /** @test */
    public function try_to_convert_Celsius_to_toReaumur()
    {
        $Re = Temperature::fromCelsiusToFahrenheit(100)->toReaumur();

        $this->assertEquals(80.00000, $Re, 'temperature');
    }
}
