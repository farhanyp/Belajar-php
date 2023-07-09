<?php

namespace BelajarPhpUnitTest\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{

    
    // Menggunakan Data Provider
    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected){

        Assert::assertEquals($expected, Math::sum($values));
        
    }
    

    public function mathSumData(): array{

        return[
            [[5,5], 10],
            [[4,4,4,4,4], 20],
            [[3,3,3], 9],
            [[], 0],
            [[2], 2]
        ];
    }
}