<?php

require "BerlinClock";
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $BerlinClock;
    protected function setUp():void
    {
        parent::setUp();
        $this->BerlinClock = new  FizzBuzz();
    }
    public  function test_display_givenSimpleMinutes1_shouldReturn_ON_OFF_OFF_OFF(){
        $actual = $this->display_simple_minutes(1);
        $this->assertEquals("[ON][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenSimpleMinutes2_shouldReturn_ON_ON_OFF_OFF(){
        $actual = $this->display_simple_minutes(2);
        $this->assertEquals("[ON][ON][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenSimpleMinutes3_shouldReturn_ON_ON_ON_OFF(){
    $actual = $this->display_simple_minutes(3);
    $this->assertEquals("[ON][ON][ON][OFF]"  , $actual);
    }
    public  function test_display_givenSimpleMinutes4_shouldReturn_ON_ON_ON_ON(){
    $actual = $this->display_simple_minutes(4);
    $this->assertEquals("[ON][ON][ON][ON]"  , $actual);
}
    public  function test_display_givenMinutes_5_shouldReturn_ON_1_OFF_10(){
        $actual = $this->display_5_by_5_minutes(5);
        $this->assertEquals("[ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_2_OFF_9(){
        $actual = $this->display_5_by_5_minutes(10);
        $this->assertEquals("[ON][ON[OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_3_OFF_8(){
        $actual = $this->display_5_by_5_minutes(15);
        $this->assertEquals("[ON][ON[ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_4_OFF_7(){
        $actual = $this->display_5_by_5_minutes(20);
        $this->assertEquals("[ON][ON[ON][ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_5_OFF_6(){
        $actual = $this->display_5_by_5_minutes(25);
        $this->assertEquals("[ON][ON[ON][ON][ON][OFF][OFF][OFF][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_6_OFF_5(){
        $actual = $this->display_5_by_5_minutes(30);
        $this->assertEquals("[ON][ON[ON][ON][ON][ON][OFF][OFF][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_7_OFF_4(){
        $actual = $this->display_5_by_5_minutes(35);
        $this->assertEquals("[ON][ON[ON][ON][ON][ON][ON][OFF][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_8_OFF_3(){
        $actual = $this->display_5_by_5_minutes(40);
        $this->assertEquals("[ON][ON[ON][ON][ON][ON][ON][ON][OFF][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_9_OFF_2(){
        $actual = $this->display_5_by_5_minutes(45);
        $this->assertEquals("[ON][ON[ON][ON][ON][ON][ON][ON][ON][OFF][OFF]"  , $actual);
    }
    public  function test_display_givenMinutes_5_shouldReturn_ON_10_OFF_1(){
        $actual = $this->display_5_by_5_minutes(50);
        $this->assertEquals("[ON][ON[ON][ON][ON][ON][ON][ON][ON][ON][OFF]"  , $actual);
    }

}
