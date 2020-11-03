<?php

require('./BerlinClock.php');

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();

    }

    public function test_display_givenSimpleMinutes1_shouldReturn_ON_OFF_OFF_OFF()
    {
        $actual = $this->berlinClock->display_simple_minutes(1);
        $this->assertEquals("{simpleMinutes :[ON][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenSimpleMinutes2_shouldReturn_ON_ON_OFF_OFF()
    {
        $actual = $this->berlinClock->display_simple_minutes(2);
        $this->assertEquals("{simpleMinutes :[ON][ON][OFF][OFF]}", $actual);
    }

    public function test_display_givenSimpleMinutes3_shouldReturn_ON_ON_ON_OFF()
    {
        $actual = $this->berlinClock->display_simple_minutes(3);
        $this->assertEquals("{simpleMinutes :[ON][ON][ON][OFF]}", $actual);
    }

    public function test_display_givenSimpleMinutes4_shouldReturn_ON_ON_ON_ON()
    {
        $actual = $this->berlinClock->display_simple_minutes(4);
        $this->assertEquals("{simpleMinutes :[ON][ON][ON][ON]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_1_OFF_10()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(1);
        $this->assertEquals("{bloc5minutes :[ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_2_OFF_9()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(2);
        $this->assertEquals("{bloc5minutes :[ON][ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_3_OFF_8()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(3);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_4_OFF_7()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(4);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_5_OFF_6()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(5);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][ON][OFF][OFF][OFF][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_6_OFF_5()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(6);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][ON][ON][OFF][OFF][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_7_OFF_4()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(7);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][ON][ON][ON][OFF][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_8_OFF_3()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(8);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][ON][ON][ON][ON][OFF][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_9_OFF_2()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(9);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][ON][ON][ON][ON][ON][OFF][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_10_OFF_1()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(10);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][ON][ON][ON][ON][ON][ON][OFF]}", $actual);
    }

    public function test_display_givenMinutes_5_shouldReturn_ON_11_OFF_0()
    {
        $actual = $this->berlinClock->display_5_by_5_minutes(11);
        $this->assertEquals("{bloc5minutes :[ON][ON][ON][ON][ON][ON][ON][ON][ON][ON][ON]}", $actual);
    }

    public function test_simple_hours_1_return_ON_OFF_OFF_OFF()
    {
        $actual = $this->berlinClock->display_simple_hours(1);
        $this->assertEquals("{ simples hours :ON,OFF,OFF,OFF,}", $actual);
    }

    public function test_simple_hours_2_return_ON_ON_OFF_OFF()
    {
        $actual = $this->berlinClock->display_simple_hours(2);
        $this->assertEquals("{ simples hours :ON,ON,OFF,OFF,}", $actual);
    }

    public function test_simple_hours_3_return_ON_ON_ON_OFF()
    {
        $actual = $this->berlinClock->display_simple_hours(3);
        $this->assertEquals("{ simples hours :ON,ON,ON,OFF,}", $actual);
    }

    public function test_simple_hours_4_return_ON_ON_ON_ON()
    {
        $actual = $this->berlinClock->display_simple_hours(4);
        $this->assertEquals("{ simples hours :ON,ON,ON,ON,}", $actual);
    }

    public function test_bloc5hours_1bloc_return_ON_OFF_OFF_OFF()
    {
        $actual = $this->berlinClock->display_bloc5_hours(1);
        $this->assertEquals("{ bloc5hours :ON,OFF,OFF,OFF,}", $actual);
    }

    public function test_bloc5hours_2_return_ON_ON_OFF_OFF()
    {
        $actual = $this->berlinClock->display_bloc5_hours(2);
        $this->assertEquals("{ bloc5hours :ON,ON,OFF,OFF,}", $actual);
    }

    public function test_bloc5hours_3_return_ON_ON_ON_OFF()
    {
        $actual = $this->berlinClock->display_bloc5_hours(3);
        $this->assertEquals("{ bloc5hours :ON,ON,ON,OFF,}", $actual);
    }

    public function test_bloc5hours_4_return_ON_ON_ON_ON()
    {
        $actual = $this->berlinClock->display_bloc5_hours(4);
        $this->assertEquals("{ bloc5hours :ON,ON,ON,ON,}", $actual);
    }

    public function test_NB_seconds_pair_return_ON()
    {
        $actual = $this->berlinClock->display_NBseconds_pair_or_Impair(20);
        $this->assertEquals("{round :ON}", $actual);
    }

    public function test_NB_seconds_impair_return_OFF()
    {
        $actual = $this->berlinClock->display_NBseconds_pair_or_Impair(33);
        $this->assertEquals("{round :OFF}", $actual);
        $l = $this->berlinClock->digital_to_berlin("23:59:59");
        var_dump($l);
    }

    public function test_digital_to_berlin_23_59_59()
    {
        $actual = $this->berlinClock->digital_to_berlin("23:59:59");
        $this->assertEquals("{round :OFF}\n{ bloc5hours :ON,ON,ON,ON,}\n{ simples hours :ON,ON,ON,OFF,}\n{bloc5minutes :[ON][ON][ON][ON][ON][ON][ON][ON][ON][ON][ON]}\n{simpleMinutes :[ON][ON][ON][ON]}", $actual);
    }
    public function test_digital_to_berlin_00_00_00(){
        $actual = $this->berlinClock->digital_to_berlin("00:00:00");
        $this->assertEquals("{round :ON}\n{ bloc5hours :OFF,OFF,OFF,OFF,}\n{ simples hours :OFF,OFF,OFF,OFF,}\n{bloc5minutes :[OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]}\n{simpleMinutes :[OFF][OFF][OFF][OFF]}", $actual);
    }
    public function test_digital_to_berlin_24_00_00(){
        $actual = $this->berlinClock->digital_to_berlin("24:00:00");
        $this->assertEquals("{round :ON}\n{ bloc5hours :ON,ON,ON,ON,}\n{ simples hours :ON,ON,ON,ON,}\n{bloc5minutes :[OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]}\n{simpleMinutes :[OFF][OFF][OFF][OFF]}", $actual);
    }
    public function test_digital_to_berlin_13_17_01(){
        $actual = $this->berlinClock->digital_to_berlin("13:17:01");
        $this->assertEquals("{round :OFF}\n{ bloc5hours :ON,ON,OFF,OFF,}\n{ simples hours :ON,ON,ON,OFF,}\n{bloc5minutes :[ON][ON][ON][OFF][OFF][OFF][OFF][OFF][OFF][OFF][OFF]}\n{simpleMinutes :[ON][ON][OFF][OFF]}", $actual);
        var_dump($actual);
    }


}
