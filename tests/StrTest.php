<?php
namespace Izzle\Support;

use PHPUnit\Framework\TestCase;

/**
 * Class StrTest
 * @package Izzle\Support
 */
class StrTest extends TestCase
{
    public function testCanBeSnakeCase(): void
    {
        $this->assertEquals('test_case', Str::snake('TestCase'));
    }
    
    public function testCanBeCamelCase(): void
    {
        $this->assertEquals('testCase', Str::camel('test_case'));
    }
}
