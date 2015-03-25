<?php

namespace BCloude\system\error;

class errControl
{
    final static function showError()
    {
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        set_error_handler(function(){
           echo '<pre>';
            print_r(func_get_args());
        });
    }

    final static function hideError()
    {
        ini_set('display_errors',0);
        error_reporting(~E_ALL);
    }

    final static function stopSystem($msg='')
    {
        $msg = $msg ? $msg : 'Error Loading Files!';
        echo $msg;
        exit;
    }
}