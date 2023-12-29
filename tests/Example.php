<?php

declare(strict_types=1);

use Pest\HtmlDom\HtmlDom;

uses(HtmlDom::class);

it('tests filter node count', function (string $filter, int $expectedNodeCount) {
    $testHtml = <<<'HTML'
        <div class="foo">
            <p>Foo</p>
            <p>Bar</p>
        </div>
        <p>Foobar</p>
        HTML;
    $this->filterNodeCount($testHtml, $filter, $expectedNodeCount);
})->with(
    [
        'filer paragraphs by class and type of parent element' => ['div.foo p', 2],
        'filer paragraphs by type of parent element' => ['body > p', 1],
        'filer paragraphs' => ['p', 3]
    ]
);
