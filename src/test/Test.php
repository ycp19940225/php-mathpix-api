<?php

require_once '../../vendor/autoload.php';
use Yangcp\mathpix\MathpixApi;


$config  = [
    "app_id" => '113310857_qq_com_669c07_9c4ea6',
    "app_key" => '50d1f007101294648ec0337011ccc6074b339cae9c0fcfcf522c823e41d77b79',
];

$obj = MathpixApi::getInstance($config);

$test = $obj->request('https://gongkao-1253756937.cosgz.myqcloud.com/app_qb/chongqing/img/1632981054.png');

var_dump($test);