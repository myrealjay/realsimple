<?php declare(strict_types = 1);

return [
    ['GET', '/', ['Realsimple\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['Realsimple\Controllers\Page', 'show']],
   
];