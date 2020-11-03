<?php

require('./BerlinClock.php');
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;
   protected function setUp(): void
   {
       parent::setUp();
       $this->berlinClock=new BerlinClock();

   }

    public function test_simple_hours_1min_return_1st(){
       $this->assertTrue(true);
       $actual=$this->berlinClock->display_simple_hours(1);
       $this->assertEquals("{1st,}",$actual);
    }
    public function test_simple_hours_2min_return_1st_2nd(){
        $actual=$this->berlinClock->display_simple_hours(2);
        $this->assertEquals("{1st,2nd,}",$actual);
    }
    public function test_simple_hours_2min_return_1st_2nd_3rd(){
        $actual=$this->berlinClock->display_simple_hours(3);
        $this->assertEquals("{1st,2nd,3rd,}",$actual);
    }
    public function test_simple_hours_2min_return_1st_2nd_3rd_4th(){
        $actual=$this->berlinClock->display_simple_hours(4);
        $this->assertEquals("{1st,2nd,3rd,4th,}",$actual);
    }
    public function test_simple_hours_5_return_5h(){
        $actual=$this->berlinClock->display_bloc5_hours(5);
        $this->assertEquals("{5h,}",$actual);
    }
    public function test_simple_hours_10_return_5h_10h(){
        $actual=$this->berlinClock->display_bloc5_hours(10);
        $this->assertEquals("{5h,10h,}",$actual);
    }
    public function test_simple_hours_15_return_5h_10h_15h(){
        $actual=$this->berlinClock->display_bloc5_hours(15);
        $this->assertEquals("{5h,10h,15h}",$actual);
    }
    public function test_simple_hours_15_return_5h_10h_15h_20h(){
        $actual=$this->berlinClock->display_bloc5_hours(20);
        $this->assertEquals("{5h,10h,15h,20h,}",$actual);
    }
    public function test_NB_seconds_pair_return_ON(){
        $actual=$this->berlinClock->display_NBseconds_pair_or_Impair(20);
        $this->assertEquals("{round :ON}",$actual);
    }
    public function test_NB_seconds_impair_return_OFF(){
        $actual=$this->berlinClock->display_NBseconds_pair_or_Impair(33);
        $this->assertEquals("{round :OFF}",$actual);
    }

}
