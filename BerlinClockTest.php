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
    public function test_simple_hours_1min_return_1st(){
       $actual=$this->berlinClock->display_simple_hours(1);
       $this->assertEquals("1st",$actual);
    }
    public function test_simple_hours_2min_return_1st_2nd(){
        $actual=$this->berlinClock->display_simple_hours(2);
        $this->assertEquals("1st,2nd,",$actual);
    }

}
