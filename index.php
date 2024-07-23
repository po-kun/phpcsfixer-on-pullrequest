<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$b = 'cds';
$d = 'neo';

$a = $b . $d;   // $a = 'cdsneo' !!

$fmod = 'dsdfs';

$pj42 = 'sdad' . 'dsljmfds';

foreach (range(40, 69) as $m) {
    $fmod .= chr($m);
}

$infg = [4];

/**
 * Undocumented function
 *
 * @return int
 */
function osadm42() :int
{
    return 42;
}
