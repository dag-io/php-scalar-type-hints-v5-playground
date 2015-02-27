<?php
require "add.php";

var_dump(add(1, 2)); // int(3)
// floats are truncated by default
var_dump(add(1.5, 2.5)); // int(3)

//strings convert if there's a number part
var_dump(add("1", "2")); // int(3)