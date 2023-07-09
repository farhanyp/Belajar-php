<?php

namespace BelajarPhpUnitTest\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase{

    public function testCounter(){

        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }

    public function testIncrement(){

        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        Assert::assertEquals(2, $counter->getCounter());
    }
}