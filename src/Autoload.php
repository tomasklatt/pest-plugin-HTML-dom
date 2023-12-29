<?php

declare(strict_types=1);

namespace Pest\PluginName;

use Pest\HtmlDom\HtmlDom;
use Pest\Plugin;
use PHPUnit\Framework\TestCase;

Plugin::uses(HtmlDom::class);

/**
 * @return TestCase
 */
function example(string $argument)
{
    return test()->filter(...func_get_args()); // @phpstan-ignore-line
}
