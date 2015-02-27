<?php
declare(strict_types=1);

foo(); // strictly type-checked function call

function foobar() {
    foo(); // strictly type-checked function call
}

class baz {
    function foobar() {
        foo(); // strictly type-checked function call
    }
}