<?php
declare(strict_types=1);

function foobar(float $abc): int {
    return ceil($abc + 1);
}

foobar(123.0);