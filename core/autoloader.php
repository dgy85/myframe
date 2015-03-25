<?php

spl_autoload_register(function ($class) {
    $prefix = 'BCloude\\';//namespace prefix
    $len = strlen($prefix);//namespace length
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = BASE_PATH . 'core' . DIRECTORY_SEPARATOR . str_ireplace('\\', DIRECTORY_SEPARATOR, $relative_class) . '.php';
    if (!file_exists($file)) {
        include_once BASE_PATH . sprintf('core%ssystem%serror%serrControl.php', DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR);
        \BCloude\system\error\errControl::stopSystem();
    }
    include_once $file;
});