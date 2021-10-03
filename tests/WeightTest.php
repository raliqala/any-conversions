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
}
