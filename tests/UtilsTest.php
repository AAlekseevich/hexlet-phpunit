<?php

namespace Php\Package\Tests;

use Php\Package\Utils;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', Utils::reverseString(''));
        $this->assertEquals('olleh', Utils::reverseString('hello'));
    }
}
