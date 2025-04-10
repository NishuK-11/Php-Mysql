<?php

echo date('d l M')."<br>";
echo date("h:i:sA");
$timezone = date_default_timezone_get();
echo $timezone;
$newtimezone = date_default_timezone_set('Asia/Kolkata');
echo $newtimezone;
echo date('d l M')."<br>";
echo date("h:i:sA");

?>