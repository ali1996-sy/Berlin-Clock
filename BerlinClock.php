<?php


class BerlinClock
{
    private $simpleHours;
    private $bloc5_hours;
public function __construct()
{
    $this->simpleHours=["OFF","OFF","OFF","OFF"];
    $this->bloc5_hours=["OFF","OFF","OFF","OFF"];

}
public function display_simple_hours($hours): String{
    $text="{";
    for($i=0;$i<$hours;$i++){
        $text=$text.$this->simpleHours[$i].",";
    }
    $text=$text."}";
    return $text;
}
    public function display_bloc5_hours($hours): String{
        $text="{ bloc5hours :";
        for($i=0;$i<$hours%5;$i++){
            $this->bloc5_hours[$i]="ON";
            $text=$text.$this->bloc5_hours[$i].",";
        }
        for($i=$hours;$i<sizeof($this->bloc5_hours);$i++){
            $text=$text.$this->bloc5_hours[$i].",";
        }
        $text=$text."}";
        return $text;
    }
    public function display_NBseconds_pair_or_Impair($seconds): String{
        $text="{round :";
        if($seconds%2==0)$text=$text."ON";
        else$text=$text."OFF";
        $text=$text."}";
        return $text;
    }
}