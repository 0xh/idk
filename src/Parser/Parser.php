<?php
/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 14/12/18
 * Time: 12:23
 */

namespace CrawlerXpath\src\Parser;


class Parser extends AbstractParser
{
    public function getTituloPrincipal()
    {
        return $this->crawler->filterXPath('(//h1)[1]')->text();
    }
}