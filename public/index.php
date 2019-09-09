<?php

require_once dirname(__DIR__).'/config/init.php';
require_once LIBS . '/functions.php';

new \myshop\App();
//\myshop\App::$app->setProperty('test', 'TEST');
//debug(\myshop\App::$app->getProperties());

throw new Exception('Страница не найдена', 404);