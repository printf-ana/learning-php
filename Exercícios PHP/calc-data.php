<?php
$date1 = new DateTime('2016-1-1');
$date2 = new DateTime('2014-12-1');

echo $intervalo = $date1->diff($date2);