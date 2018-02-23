<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 23.02.18
 * Time: 12:24
 */

spl_autoload_register(function($name)
{
    $basename = __DIR__ . '/..';

    if(strpos('App\\', $name) !== null) {

        $name = str_replace('App\\', '', $name);
    }

    $name = str_replace('\\', DIRECTORY_SEPARATOR, $name);

    $file = $basename . DIRECTORY_SEPARATOR . $name . '.php';

    if (file_exists($file)){
        require $file;
    }
});