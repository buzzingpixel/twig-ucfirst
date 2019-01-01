<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2018 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace buzzingpixel\twigucfirst;

use Twig_Filter;
use Twig_Markup;
use Twig_Extension;

class UcFirstTwigExtension extends Twig_Extension
{
    public function getFilters(): array
    {
        return [new Twig_Filter('ucfirst', [$this, 'ucFirstFilter'])];
    }

    public function ucFirstFilter(string $val) : Twig_Markup
    {
        return new Twig_Markup(ucfirst($val), 'UTF-8');
    }
}
