<?php

require_once dirname(__DIR__).'/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \myshop\App();
new Exception('Страница не найдена', 404);