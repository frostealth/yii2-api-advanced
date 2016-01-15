<?php

require(dirname(dirname(__DIR__)) . '/bootstrap.php');
require(dirname(dirname(__DIR__)) . '/common/config/bootstrap.php');
require(dirname(__DIR__) . '/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(dirname(dirname(__DIR__)) . '/common/config/main.php'),
    require(dirname(__DIR__) . '/config/main.php')
);

(new yii\web\Application($config))->run();
