<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $input = 'abc';

        $result = strrev($input);

        $this->assertEquals('cba', $result);
    }
}
