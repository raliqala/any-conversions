<?php

namespace raliqala\AnyConversions\Tests;

use PHPUnit\Framework\TestCase;
use raliqala\AnyConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function try_to_convert_from_kg_to_pounds()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /** @test */
    public function try_to_convert_from_kg_to_Ounces()
    {
        $oz = Weight::fromKilograms(100)->toOunces();

        $this->assertEquals(3527.4, $oz);
    }

    /** @test */
    public function try_to_convert_from_kg_to_Stones()
    {
        $st = Weight::fromKilograms(100)->toStones();

        $this->assertEquals(15.747, $st);
    }

    /** @test */
    public function try_to_convert_from_kg_to_Tonnes()
    {
        $t = Weight::fromKilograms(100)->toTonnes();

        $this->assertEquals(0.1000000, $t);
    }

    /** @test */
    public function try_to_convert_from_kg_to_Grams()
    {
        $g = Weight::fromKilograms(100)->toGrams();

        $this->assertEquals(100000.0, $g);
    }

    /** @test */
    public function try_to_convert_from_kg_to_Milligrams()
    {
        $mg = Weight::fromKilograms(100)->toMilligrams();

        $this->assertEquals(1.000000e+8, $mg);
    }
}
