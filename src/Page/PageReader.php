<?php declare(strict_types = 1);

namespace Realsimple\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}