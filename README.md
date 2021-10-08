
```php
<?php
require_once '../../vendor/autoload.php';
use Yangcp\mathpix\MathpixApi;


$config  = [
    "app_id" => '',
    "app_key" => '',
];

$obj = MathpixApi::getInstance($config);

$test = $obj->request('https://gongkao-1253756937.cosgz.myqcloud.com/app_qb/chongqing/img/1632981054.png');

var_dump($test);
```

