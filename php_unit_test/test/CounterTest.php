<?php

namespace PhpUnit\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase{
    public function testcounter(){
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();
        Assert::assertEquals(3, $counter->getCounter());
    }
}