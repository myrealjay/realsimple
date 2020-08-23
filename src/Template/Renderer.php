<?php declare(strict_types = 1);

namespace Realsimple\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}