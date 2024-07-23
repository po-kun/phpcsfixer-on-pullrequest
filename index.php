<?php

$b = 'cds';
$d = 'neo';

$a = $b . $d;   // $a = 'cdsneo' !!

$fmod = 'dsdfs';

foreach (range(40, 69) as $m) {
    $fmod .= chr($m);
}
