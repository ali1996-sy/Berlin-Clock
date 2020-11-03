<?php

class BerlinClock
{
    private $simpleMinutes;
    private $minutes_5;
    private $simpleHours;
    private $bloc5_hours;

    public function __construct()
    {
        $this->simpleMinutes = array("OFF", "OFF", "OFF", "OFF");
        $this->minutes_5 = array("OFF", "OFF", "OFF", "OFF", "OFF", "OFF", "OFF", "OFF", "OFF", "OFF", "OFF");
        $this->simpleHours = ["OFF", "OFF", "OFF", "OFF"];
        $this->bloc5_hours = ["OFF", "OFF", "OFF", "OFF"];


    }

    public function display_simple_minutes($minutes): string
    {

        $stringToReturn = "{simpleMinutes :";
        for ($index = 0; $index < $minutes; $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->simpleMinutes[$index] = "ON" . "]";
        }
        for ($index = $minutes; $index < 4; $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->simpleMinutes[$index] . "]";
        }
        $stringToReturn=$stringToReturn."}";
        return $stringToReturn;
    }

    public function display_5_by_5_minutes($minutes): string
    {

        $stringToReturn = "{bloc5minutes :";
        for ($index = 0; $index < $minutes; $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->minutes_5 [$index] = "ON" . "]";
        }
        for ($index = $minutes; $index < 11; $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->minutes_5 [$index] . "]";
        }
        $stringToReturn=$stringToReturn."}";
        return $stringToReturn;
    }


    public function display_NBseconds_pair_or_impair($seconds): string
    {
        $text = "{round :";
        if ($seconds % 2 == 0) $text = $text . "ON";
        else$text = $text . "OFF";
        $text = $text . "}";
        return $text;
    }

    public function display_bloc5_hours($hours): string
    {
        $text = "{ bloc5hours :";
        for ($i = 0; $i < $hours; $i++) {
            $text = $text . $this->bloc5_hours[$i]="ON" . ",";
        }
        for ($i = $hours; $i < 4; $i++) {
            $text = $text . $this->bloc5_hours[$i] . ",";
        }
        $text = $text . "}";
        return $text;
    }

    public function display_simple_hours($hours): string
    {
        $text = "{ simples hours :";
        for ($i = 0; $i < $hours; $i++) {
            $text = $text . $this->simpleHours[$i]="ON" . ",";
        }
        for ($i = $hours; $i < 4; $i++) {
            $text = $text . $this->simpleHours[$i] . ",";
        }
        $text = $text . "}";
        return $text;
    }
    public function digital_to_berlin($date): string
    {
        $text = "";
        $hours = (int)substr($date, 0, 2);
        $minutes = (int)substr($date, 3, 2);
        $seconds = (int)substr($date, 6, 2);
        $text = $text . $this->display_NBseconds_pair_or_impair($seconds);
        $text = $text . "\n" . $this->display_bloc5_hours((int)($hours/5));
        $text = $text . "\n" . $this->display_simple_hours($hours % 5);
        $text=$text."\n".$this->display_5_by_5_minutes((int)($minutes/5));
        $text=$text."\n".$this->display_simple_minutes($minutes%5);
        return $text;
    }

}