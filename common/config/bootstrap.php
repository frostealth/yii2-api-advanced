<?php

$root = dirname(dirname(__DIR__));

Yii::setAlias('common', $root . '/common');
Yii::setAlias('console', $root . '/console');
Yii::setAlias('api', $root . '/api');

dotenv()->required(['DB_DSN', 'DB_USERNAME', 'DB_PASSWORD'])->notEmpty();
