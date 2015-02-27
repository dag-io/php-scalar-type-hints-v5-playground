<?php
declare(strict_types=1);
set_error_handler(function() {
    return true;
});

function foo(int $abc) {
    var_dump($abc);
}
foo("test"); // string(4) "test"
?>