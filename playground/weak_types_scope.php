<?php
foo(); // weakly type-checked function call

function foobar() {
    foo(); // weakly type-checked function call
}

class baz {
    function foobar() {
        foo(); // weakly type-checked function call
    }
}