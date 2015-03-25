<?php

include_once 'core/autoloader.php';
define('BASE_PATH',__DIR__ . DIRECTORY_SEPARATOR);
define('ENVIRONMENT','test');
switch(ENVIRONMENT)
{
    case 'test':
        \BCloude\system\error\errControl::showError();
        break;
    case 'production':
        \BCloude\system\error\errControl::hideError();
        break;
}
\BCloude\initSys::run();


111;