<?php declare(strict_types = 1);

return [
    ['GET', '/', ['Realsimple\Controllers\Homepage', 'show']],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];