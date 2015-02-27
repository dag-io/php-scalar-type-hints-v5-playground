<?php
declare(strict_types=1);

require "add.php";

var_dump(add(1, 2)); // int(3)

var_dump(add(1.5, 2.5)); // int(3)
// Catchable fatal error: Argument 1 passed to add() must be of the type integer, float given