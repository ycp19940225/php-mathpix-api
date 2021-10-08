<?php

require_once '../../vendor/autoload.php';
use Yangcp\mathpix\MathpixApi;


$config  = [
    "app_id" => '',
    "app_key" => '',
];

$obj = MathpixApi::getInstance($config);

$test = $obj->request('img url');

var_dump($test);