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
    $text="{ simples hours :";
    for($i=0;$i<$hours;$i++){
        $this->simpleHours[$i]="ON";
        $text=$text.$this->simpleHours[$i].",";
    }
    for($i=$hours;$i<sizeof($this->simpleHours);$i++){
        $text=$text.$this->simpleHours[$i].",";
    }
    $text=$text."}";
    return $text;
}
    public function display_bloc5_hours($hours): String{
        $text="{ bloc5hours :";
        for($i=0;$i<$hours/5;$i++){
            $this->bloc5_hours[$i]="ON";
            $text=$text.$this->bloc5_hours[$i].",";
        }
        for($i=$hours/5;$i<sizeof($this->bloc5_hours);$i++){
            $text=$text.$this->bloc5_hours[$i].",";
        }
        $text=$text."}";
        return $text;
    }
    public function display_NBseconds_pair_or_impair($seconds): String{
        $text="{round :";
        if($seconds%2==0)$text=$text."ON";
        else$text=$text."OFF";
        $text=$text."}";
        return $text;
    }
    public function digital_to_berlin($date):String{
        $text="";
        $hours=(int)substr($date,0,2);
        $minutes=(int)substr($date,3,2);
        $seconds=(int)substr($date,6,2);
        $text=$text.$this->display_NBseconds_pair_or_impair($seconds;
        $text=$text."\n".$this->display_bloc5_hours($hours);
        $text=$text."\n".$this->display_simple_hours($hours%5)."\n";
        return $text;
    }
}