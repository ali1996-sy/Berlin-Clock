<?php

require('./BerlinClock.php');
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;
    protected function setUp()
    {
        parent::setUp();
        $this->berlinClock=new BerlinClock();

    }
    public function test_simple_minutes_1min_return_1st_lamp(){
       $actual=$this->berlinClock->display_simple_hours(1);
       $this->assertEquals(1,$actual);
    }
}
