<?php
declare(strict_types=1);

function foobar(): int {
    return 1.0;
}

var_dump(foobar());
// Catchable fatal error: Return value of foobar() must be of the type integer, float returned