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

    public function test_simple_hours_1min_return_ON_OFF_OFF_OFF(){
       $actual=$this->berlinClock->display_simple_hours(1);
       $this->assertEquals("{ simples hours :ON,OFF,OFF,OFF,}",$actual);
    }
    public function test_simple_hours_2min_return_ON_ON_OFF_OFF(){
        $actual=$this->berlinClock->display_simple_hours(2);
        $this->assertEquals("{ simples hours :ON,ON,OFF,OFF,}",$actual);
    }
    public function test_simple_hours_2min_return_ON_ON_ON_OFF(){
        $actual=$this->berlinClock->display_simple_hours(3);
        $this->assertEquals("{ simples hours :ON,ON,ON,OFF,}",$actual);
    }
    public function test_simple_hours_2min_return_ON_ON_ON_ON(){
        $actual=$this->berlinClock->display_simple_hours(4);
        $this->assertEquals("{ simples hours :ON,ON,ON,ON,}",$actual);
    }
    public function test_bloc5hours_5_return__ON_ON_OFF_OFF(){
        $actual=$this->berlinClock->display_bloc5_hours(5);
        $this->assertEquals("{ bloc5hours :ON,OFF,OFF,OFF,}",$actual);
    }
    public function test_bloc5hours_10_return_ON_ON_OFF_OFF(){
        $actual=$this->berlinClock->display_bloc5_hours(10);
        $this->assertEquals("{ bloc5hours :ON,ON,OFF,OFF,}",$actual);
    }
    public function test_bloc5hours_15_return_ON_ON_ON_OFF(){
        $actual=$this->berlinClock->display_bloc5_hours(15);
        $this->assertEquals("{ bloc5hours :ON,ON,ON,OFF,}",$actual);
    }
    public function test_bloc5hours_20_return_ON_ON_ON_ON(){
        $actual=$this->berlinClock->display_bloc5_hours(20);
        $this->assertEquals("{ bloc5hours :ON,ON,ON,ON,}",$actual);
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
