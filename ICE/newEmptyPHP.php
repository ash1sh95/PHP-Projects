<?php
function calcWeekPay($developertype,$numWeeklyHours)
{
$standardHours=40;
$newpay=0;
if($developertype=1)
{
$pay = 53.36;
if($numWeeklyHours > 40)
{
$extraHours=$numWeeklyHours-$standardHours;
$newpay = ($pay*$standardHours) + $extraHours($pay*2);
}
else
    {
    
    $newpay = $pay*$numWeeklyHours;
}
}

if($developertype=2)
{
$pay = 63.93;
if($numWeeklyHours > 40)
{
$extraHours=$numWeeklyHours-$standardHours;
$newpay = ($pay*$standardHours) + $extraHours($pay*2);
}
else
{
$newpay = $pay*$numWeeklyHours;
}
}
return $newpay;
}
