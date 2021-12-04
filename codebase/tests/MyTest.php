<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;

/**
 * @group time-sensitive
 */
class MyTest extends TestCase
{
    public function testSomething()
    {

        $value = true;
        $array = [
            'key'=>'value'
        ];
        $this->assertEquals(1000, 1000,'this text is to check diffrence betwin');
        $this->assertTrue($value);
        $this->assertArrayHasKey('key',$array);
        $this->assertEquals('value',$array['key']);
    }
}