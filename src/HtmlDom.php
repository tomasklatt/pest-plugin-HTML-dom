<?php

declare(strict_types=1);

namespace Pest\HtmlDom;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

trait HtmlDom
{
    /**
     * Example description.
     */
    public function filterNodeCount(string $html, string $filer, int $expectedNodeCount): TestCase
    {
        $crawler = new Crawler($html);
        expect($crawler->filter($filer)->count())->toEqual($expectedNodeCount);

        return $this;
    }
}
