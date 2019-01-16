<?php

require_once "vendor/autoload.php";

use CrawlerXpath\src\PageObject\MapfrePageObject;
use GuzzleHttp\Client;

$poMapfe = new MapfrePageObject(new Client());

$po = new MapfrePageObject(new Client(['cookies' => true]));
$parser = $po->postLogin();
var_dump($parser);