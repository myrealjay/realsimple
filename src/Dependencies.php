<?php declare(strict_types = 1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');
$injector->alias('Realsimple\Template\Renderer', 'Realsimple\Template\MustacheRenderer');

$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
        ]),
    ],
]);

$injector->define('Realsimple\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../pages',
]);

$injector->alias('Realsimple\Page\PageReader', 'Realsimple\Page\FilePageReader');
$injector->share('Realsimple\Page\FilePageReader');

return $injector;