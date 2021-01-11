<?php
namespace Izzle\Support;

use PHPUnit\Framework\TestCase;

/**
 * Class PluralizerTest
 * @package Izzle\Support
 */
class PluralizerTest extends TestCase
{
    public function testCanBePlural(): void
    {
        $this->assertEquals('books', Pluralizer::plural('book'));
    }
}
