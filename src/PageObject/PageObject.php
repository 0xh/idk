<?php

/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 14/12/18
 * Time: 11:46
 */

namespace CrawlerXpath\src\PageObject;

use CrawlerXpath\src\Parser\Parser;

class PageObject extends AbstractPageObject
{
    public function getHtmlTable()
    {
        $response = $this->client->get('https://websitedocaralho.com.br/');

        return new Parser($response->getBody()->getContents());
    }

}