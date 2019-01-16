<?php

namespace CrawlerXpath\src\PageObject;

use CrawlerXpath\src\Parser\MapfreParser;

class MapfrePageObject extends AbstractPageObject{
    public function getPage()
    {
        $response = $this->client->get('http://mapfrenegociospublicos.com.br/');
        return new MapfreParser($response->getBody()->getContents());
    }

    public function postLogin()
    {
        $parser = $this->getPage();
        $response = $this->client->request('POST', 'http://mapfrenegociospublicos.com.br/Default.aspx', [
            'form_params' => [
                'ScriptManager' => 'UpdatePanel|btnLogin',
                'txtuser' => '',
                'txtpass' => '',
                'btnLogin' => '',
                '__EVENTVALIDATION' => $parser->getEventValidation(),
                '__VIEWSTATE' => $parser->getViewState(),
                '__VIEWSTATEGENERATOR' => 'CA0B0334'
            ]
            ]);
        return $response->getBody()->getContents();
    }
}