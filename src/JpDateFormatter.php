<?php
namespace Ashokgrg\JpDateFormatter;
class JpDateFormatter
{

    public static function format(string $date): string
    {
        $year                 = date('Y', strtotime($date));
        $month                = date('m', strtotime($date));
        $day                  = date('d', strtotime($date));
        return $year."年".$month."月".$day."日";
    }
}
